let beapi = 'http://localhost:8000/api/'

Alpine.data('profile', () => ({
    data: [],
    async getprofile(id) {
        var response = await fetch(beapi + 'identity/' + id, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization' : localStorage.getItem('utoken')
            }
        })
        response = await response.json()
        this.data = response.data
        if (!response.status) {
            if (localStorage.getItem('urole') == 1) {
                const baseUrl = window.location.origin
                window.location.replace(baseUrl + '/dashboard')
            }
            if (localStorage.getItem('urole') == 2) {
                const baseUrl = window.location.origin
                window.location.replace(baseUrl + '/scan')
            }
        }
    }
}))
Alpine.data('dashboard', () => ({
    data: [],
    async getidentity() {
        var response = await fetch(beapi + 'dashboard', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization' : localStorage.getItem('utoken')
            }
        })
        response = await response.json()
        this.data = response.data
        

    }
}))

//----------(batas suci)----------
Alpine.data('scan', () => ({
    form: {
        image: '',
    },
    mode: 'scan',
    datanya: {},
    giloading: false,
    scanUlang() {
        this.datanya = {},
            this.mode = 'scan'
    },

    scanktp() {
        const ktp_label = document.querySelector('#ktp_label');
        const ktp = document.querySelector('#ktp');
        ktp.setAttribute('disabled', true)
        ktp_label.classList.remove('bg-white', 'cursor-pointer')
        ktp_label.classList.add('bg-gray-200', 'cursor-not-allowed')
        this.giloading = true
        this.form.image = document.getElementById('ktp').files[0]

        const data = new FormData();
        data.append('image', this.form.image)

        fetch(beapi + 'upload', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Authorization' : localStorage.getItem('utoken')
            },
            body: data
        })
            .then(async response => {
                response = await response.json()
                this.datanya = response.data
                this.giloading = false
                this.mode = 'verifikasi'

            })
    },

    //----------(batas suci)----------
    submitData() {
        const id_user = document.getElementById('id_user').value
        const ktp = this.form.image
        const nik = document.getElementById('nik').value
        const nama = document.getElementById('nama').value
        const tempat_lahir = document.getElementById('tempat_lahir').value
        const tanggal_lahir = document.getElementById('tanggal_lahir').value
        const kelamin = document.getElementById('kelamin').value
        const golongan_darah = document.getElementById('golongan_darah').value
        const alamat = document.getElementById('alamat').value
        const rt = document.getElementById('rt').value
        const rw = document.getElementById('rw').value
        const kelurahan = document.getElementById('kelurahan').value
        const kecamatan = document.getElementById('kecamatan').value
        const kota = document.getElementById('kota').value
        const provinsi = document.getElementById('provinsi').value
        const agama = document.getElementById('agama').value
        const perkawinan = document.getElementById('perkawinan').value
        const pekerjaan = document.getElementById('pekerjaan').value
        const kewarganegaraan = document.getElementById('kewarganegaraan').value

        const datane = new FormData();
        datane.append('id_user', id_user)
        datane.append('ktp', ktp)
        datane.append('nik', nik)
        datane.append('nama', nama)
        datane.append('tempat_lahir', tempat_lahir)
        datane.append('tanggal_lahir', tanggal_lahir)
        datane.append('jenis_kelamin', kelamin)
        datane.append('golongan_darah', golongan_darah)
        datane.append('alamat', alamat)
        datane.append('rt', rt)
        datane.append('rw', rw)
        datane.append('kelurahan', kelurahan)
        datane.append('kecamatan', kecamatan)
        datane.append('kota', kota)
        datane.append('provinsi', provinsi)
        datane.append('agama', agama)
        datane.append('status_perkawinan', perkawinan)
        datane.append('pekerjaan', pekerjaan)
        datane.append('kewarganegaraan', kewarganegaraan)
        datane.append('id_user', localStorage.getItem('uid'))
        this.loading = true
        fetch(beapi + 'identity/add', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Authorization' : localStorage.getItem('utoken')
            },
            body: datane
        })
        .then(async response => {
            response = await response.json()
            this.datanya = response.data
            if(response.status){
                const baseUrl = window.location.origin
                window.location.replace(baseUrl + '/profile')
            }else{
                this.mode = 'scan'
            }
        })


    }
}))

//----------(batas suci)----------
Alpine.data('forgotpassword', () => ({
    email: '',
    message: '',
    statusnya: '',
    pesaneror: '',
    isLoading: false,
    flash: false,
    flashdatane() {
        if (localStorage.getItem('flash')) {
            this.flash = true
            setTimeout(function () {
                localStorage.removeItem('flash')
                this.flash = false
            }, 3000)
        }
    },

    sendemail() {
        this.isLoading = true
        const data = new FormData();
        data.append('email', this.email)
        data.append('link', document.getElementById('link').value)

        fetch(beapi + 'user/forgotpass', {
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

                if (this.statusnya == true) {
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/successsendemail')
                }
                if (this.statusnya == false) {
                    this.pesaneror = this.message
                    this.isLoading = false
                }
            })
    },

}))

//----------(batas suci)----------
Alpine.data('changeforgetpassword', () => ({
    password: '',
    confirmpassword: '',
    email: '',
    token: '',
    isloading: true,
    errmsg: '',
    cektoken() {
        token = document.getElementById('token').value
        fetch(beapi + 'emailbytoken/' + token, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
            }
        })
            .then(async response => {
                response = await response.json()
                statusnya = response.status

                if (statusnya == true) {
                    this.isloading = false
                    this.email = response.data.email
                    this.token = token
                } else {
                    localStorage.setItem('flash', true)
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/forgotpassword')
                }
            })
    },

    submitchangepass() {
        if (this.password != this.confirmpassword) {
            this.errmsg = 'password dan konfirmasi password tidak sesuai!'
        } else {
            const data = new FormData();
            data.append('token', this.token)
            data.append('email', this.email)
            data.append('password', this.password)

            fetch(beapi + 'changeforgotpass/', {
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

                    if (this.statusnya == true) {
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/login')
                    }
                    if (this.statusnya == false) {
                        this.errmsg = this.message
                    }
                })
        }
    },

}))

//----------(batas suci)----------
Alpine.data('userRegister', () => ({
    email: '',
    password: '',
    confirmpassword: '',

    errmsg: '',
    errarea: '',
    message: '',

    isloading: false,

    submit() {
        if (this.password != this.confirmpassword) {
            this.errarea = 'password'
            this.errmsg = 'password dan konfirmasi password tidak sesuai!'
        } else if (this.password.length < 8) {
            this.errarea = 'password'
            this.errmsg = 'panjang password minimal 8 karakter!'
        } else {
            this.isloading = true
            const data = new FormData();
            data.append('email', this.email)
            data.append('password', this.password)

            this.isLoading = true
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

                    if (this.statusnya == true) {
                        localStorage.setItem('message', this.message)
                        localStorage.setItem('flash', true)
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/login')
                    }
                    if (this.statusnya == false) {
                        this.errarea = response.data
                        this.errmsg = this.message
                        this.isloading = false
                    }
                })
        }

    }
}))

//----------(AUTH Login)----------
Alpine.data('userLogin', () => ({
    email: '',
    password: '',

    errmsg: '',
    errarea: '',
    message: '',

    isLoading: false,

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
        this.isLoading = true
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
                this.statusnya = response.status
                if (this.statusnya) {
                    auth = response.data.auth
                    user = response.data.user
                    utoken = auth.token_type + ' ' + auth.token
                    urole = user.id_role
                    uid = user.id

                    localStorage.setItem('utoken', utoken)
                    localStorage.setItem('urole', urole)
                    localStorage.setItem('uid', uid)

                    if (urole == 1) {
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/dashboard')
                    }
                    if (urole == 2) {
                        fetch(beapi + 'identity/' + uid, {
                            method: 'GET',
                            headers: {
                                'Accept': 'application/json',
                                'Authorization' : localStorage.getItem('utoken')
                            },
                        })
                            .then(async response => {
                                response = await response.json()
                                this.message = response.message
                                this.status = response.status
                            })
                        if (this.status) {
                            const baseUrl = window.location.origin
                            window.location.replace(baseUrl + '/profile')
                        } else {
                            const baseUrl = window.location.origin
                            window.location.replace(baseUrl + '/scan')
                        }
                    }
                    // const baseUrl = window.location.origin
                    // window.location.replace(baseUrl + '/login')
                }
                if (!this.statusnya) {
                    this.errarea = response.data
                    this.errmsg = this.message
                    this.isLoading = false
                }
            })

    }
}))

Alpine.data('auth', () => ({
    userid: localStorage.getItem('uid') ?? '',
    userrole: localStorage.getItem('urole') ?? '',
    isloading: false,
    islogin: false,
    sts: false,
    ceklogin() {
        this.isloading = true
        token = localStorage.getItem('utoken')
        fetch(beapi + 'me', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': localStorage.getItem('utoken')
            },
        })
            .then(async response => {
                response = await response.json()
                this.message = response.message
                this.status = response.status

                if (this.status) {
                    this.userid = localStorage.getItem('uid')
                    this.userrole = localStorage.getItem('urole')
                    this.islogin = true
                    this.isloading = false
                }
                else {
                    this.islogin = false
                    this.isloading = false
                    localStorage.clear()
                }
            })

    },

    notlogin() {
        const baseUrl = window.location.origin

            if (this.userrole == 1) {
                this.islogin = true
                window.location.replace(baseUrl + '/dashboard')
            }
            if (this.userrole == 2) {
                this.islogin = true
                fetch(beapi + 'identity/' + this.userid, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization' : localStorage.getItem('utoken')
                    },
                })
                    .then(async response => {
                        response = await response.json()
                        msg = response.message
                        this.sts = response.status
                    })
                if (this.sts) {
                    window.location.replace(baseUrl + '/profile')
                } else {
                    window.location.replace(baseUrl + '/scan')
                }
            
        }
    },

    isadmin() {
        const baseUrl = window.location.origin
        if (!this.islogin) {
            window.location.replace(baseUrl + '/login')
        }
        if (this.userrole == 2) {
            fetch(beapi + 'identity/' + this.userid, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization' : localStorage.getItem('utoken')
                },
            })
                .then(async response => {
                    response = await response.json()
                    msg = response.message
                    this.sts = response.status
                })
            if (this.sts) {
                window.location.replace(baseUrl + '/profile')
            } else {
                window.location.replace(baseUrl + '/scan')
            }
        }
    },

    isuserhaveidentity() {
        const baseUrl = window.location.origin
        if (!this.islogin) {
            window.location.replace(baseUrl + '/login')
        }
        if (this.userrole == 1) {
            window.location.replace(baseUrl + '/dashboard')
        }
        if (this.userrole == 2) {
            fetch(beapi + 'identity/' + this.userid, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization' : localStorage.getItem('utoken')
                },
            })
                .then(async response => {
                    response = await response.json()
                    msg = response.message
                    this.sts = response.status
                })
            if (!this.sts) {
                window.location.replace(baseUrl + '/scan')
            }
        }
    },
    isusernothaveidentity() {
        const baseUrl = window.location.origin
        if (!this.islogin) {
            window.location.replace(baseUrl + '/login')
        }
        if (this.userrole == 1) {
            window.location.replace(baseUrl + '/dashboard')
        }
        if (this.userrole == 2) {
            fetch(beapi + 'identity/' + this.userid, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization' : localStorage.getItem('utoken')
                },
            })
                .then(async response => {
                    response = await response.json()
                    msg = response.message
                    this.sts = response.status
                })
            if (this.sts) {
                window.location.replace(baseUrl + '/profile')
            }
        }
    },

    logout() {
        localStorage.clear()

        const baseUrl = window.location.origin
        window.location.replace(baseUrl + '/login')
    }
}))