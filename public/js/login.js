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
                                'Authorization': localStorage.getItem('utoken')
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
                }
                if (!this.statusnya) {
                    this.errarea = response.data
                    this.errmsg = this.message
                    this.isloading = false
                }
            })

    }
}))