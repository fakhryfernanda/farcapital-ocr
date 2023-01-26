Alpine.data('userRegister', () => ({
    email: '',
    password: '',
    confirmpassword: '',

    errmsg: '',  // pesan error
    errarea: '', // memberi tahu bagian mana yang memiliki error
    message: '',

    isloading: false,

    submit() {
        // Validasi
        if (this.email.length == 0) {
            this.errarea = 'email'
            this.errmsg = 'Email wajib diisi'
        } else if (this.password.length == 0) {
            this.errarea = 'password'
            this.errmsg = 'Password wajib diisi'
        } else if (this.password.length < 8) {
            this.errarea = 'password'
            this.errmsg = 'Password minimal 8 karakter!'
        } else if (this.password != this.confirmpassword) {
            this.errarea = 'password'
            this.errmsg = 'Password dan konfirmasi password tidak sesuai!'
        } else {
            link = window.location.origin + '/emailvalidation'

            this.isloading = true
            const data = new FormData();
            data.append('email', this.email)
            data.append('link', link)
            data.append('password', this.password)

            fetch(beapi + 'user/add', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            })
            .then(async response => {
                response = await response.json()
                this.message = response.message
                this.statusnya = response.status

                // Jika registrasi berhasil
                if (this.statusnya) {
                    localStorage.setItem('message', this.message)
                    localStorage.setItem('flash', true)
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/login')
                }
                
                // Jika registrasi gagal
                else {
                    this.errarea = response.data
                    this.errmsg = this.message
                    this.isloading = false
                }
            })
        }

    }
}))

Alpine.data('userLogin', () => ({
    email: '',
    password: '',

    errmsg: '',
    errarea: '',
    message: '',

    isloading: false,

    flash: false,
    flashdata() {
        if (localStorage.getItem('flash')) {
            this.flash = true
            this.message = localStorage.getItem('message')
            setTimeout(function () {
                localStorage.removeItem('flash')
                localStorage.removeItem('message')
                this.flash = false
            }, 3000)
        }
    },

    submit() {
        if (this.email.length == 0) {
            this.errarea = 'email'
            this.errmsg = 'Email wajib diisi'
        } else if (this.password.length == 0) {
            this.errarea = 'password'
            this.errmsg = 'Password wajib diisi'
        } else {
            this.isloading = true
            const data = new FormData();
            data.append('email', this.email)
            data.append('password', this.password)

            fetch(beapi + 'login', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            })
            .then(async response => {
                response = await response.json()
                this.message = response.message
                responsestatus = response.status

                // Jika login berhasil
                if (responsestatus) {
                    auth = response.data.auth
                    user = response.data.user
                    utoken = auth.token_type + ' ' + auth.token
                    urole = user.id_role
                    uid = user.id

                    localStorage.setItem('utoken', utoken)
                    localStorage.setItem('urole', urole)
                    localStorage.setItem('uid', uid)

                    // Jika yang login admin
                    if (urole == 1) {
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/dashboard')
                    }

                    // Jika yang login user
                    else if (urole == 2) {
                        // Memeriksa apakah user sudah pernah scan ktp
                        fetch(beapi + 'identity/' + uid, {
                            method: 'GET',
                            headers: {
                                'Accept': 'application/json',
                                'Authorization': utoken
                            },
                        })
                        .then(async response => {
                            response = await response.json()
                            this.message = response.message
                            statuslogin = response.status

                            // User sudah scan
                            if (statuslogin) {
                                const baseUrl = window.location.origin
                                window.location.replace(baseUrl + '/profile')
                            }
                            
                            // User belum scan
                            else {
                                const baseUrl = window.location.origin
                                window.location.replace(baseUrl + '/scan')
                            }
                        })
                    }
                }

                // Jika login gagal
                else {
                    this.errarea = response.data
                    this.errmsg = this.message
                    this.isloading = false
                }
            })
        }
    }
}))
