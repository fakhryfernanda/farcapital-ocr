Alpine.data('auth', () => ({
    userid: localStorage.getItem('uid') ?? '',
    userrole: localStorage.getItem('urole') ?? '',
    isloading: false,
    islogin: false,
    sts: false,
    
    ceklogin() {
        if(!localStorage.getItem('utoken')){
            this.islogin = false
            this.isloading = false
        }else{
            this.isloading = true
            token = localStorage.getItem('utoken')
            fetch(beapi + 'me', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': token
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

        }
        
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
                    'Authorization': localStorage.getItem('utoken')
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
                    'Authorization': localStorage.getItem('utoken')
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

    // -------batas suci-------//

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
                    'Authorization': localStorage.getItem('utoken')
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
                    'Authorization': localStorage.getItem('utoken')
                },
            })
                .then(async response => {
                    response = await response.json()
                    msg = response.message
                    this.sts = response.status
                    if (this.sts == true) {
                        window.location.replace(baseUrl + '/profile')
                    }
                })
        }
    },

    logout() {
        localStorage.clear()

        const baseUrl = window.location.origin
        window.location.replace(baseUrl + '/login')
    }
}))