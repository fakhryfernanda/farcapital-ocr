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