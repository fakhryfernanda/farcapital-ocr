let beapi = 'http://localhost:8000/api/'

Alpine.data('profile', () => ({
    data: [],
    isloading : false,
    async getprofile(id) {
        this.isloading = true
        var response = await fetch(beapi + 'identity/' + id, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': localStorage.getItem('utoken')
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
        this.isloading = false
    }
}))
Alpine.data('dashboard', () => ({
    data: [],
    async getidentity() {
        var response = await fetch(beapi + 'dashboard', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': localStorage.getItem('utoken')
            }
        })
        response = await response.json()
        this.data = response.data


    }
}))

//----------(batas suci)----------
Alpine.data('scan', (src = '') => ({
    form: {
        image: '',
    },
    mode: 'scan',
    datanya: {},
    giloading: false,
    isloading: false,
    imageUrl: src,
    eulacheck : false,
    errmsg: {
        backscan : '',
        nik : '',
        nama : '',
        tempat_lahir : '',
        tanggal_lahir : '',
        kelamin : '',
        golongan_darah : '',
        alamat : '',
        rt : '',
        rw : '',
        kelurahan : '',
        kecamatan : '',
        kota : '',
        provinsi : '',
        agama : '',
        status_perkawinan : '',
        pekerjaan : '',
        kewarganegaraan : '',
        becritical : '',
        eula : ''
    },
    errarea: {
        backscan : false,
        nik : false,
        nama : false,
        tempat_lahir : false,
        tanggal_lahir : false,
        kelamin : false,
        golongan_darah : false,
        alamat : false,
        rt : false,
        rw : false,
        kelurahan : false,
        kecamatan : false,
        kota :false,
        provinsi :false,
        agama :false,
        status_perkawinan : false,
        pekerjaan : false,
        kewarganegaraan : false,
        becritical : false,
        eula : false
    },
    scanUlang() {
        this.datanya = {}
        this.imageUrl = ''
        this.eulacheck = false
        this.mode = 'scan'
        
            this.errarea.backscan = false
            this.errarea.nik = false
            this.errarea.nama = false
            this.errarea.tempat_lahir = false
            this.errarea.tanggal_lahir = false
            this.errarea.kelamin = false
            this.errarea.golongan_darah = false
            this.errarea.alamat = false
            this.errarea.rt = false
            this.errarea.rw = false
            this.errarea.kelurahan = false
            this.errarea.kecamatan = false
            this.errarea.kota =false
            this.errarea.provinsi =false
            this.errarea.agama =false
            this.errarea.status_perkawinan = false
            this.errarea.pekerjaan = false
            this.errarea.kewarganegaraan = false
            this.errarea.eula = false
            this.errarea.becritical = false
        
    },
  
    fileChosen(event) {
    this.fileToDataUrl(event, src => this.imageUrl = src)
    },

    fileToDataUrl(event, callback) {
    if (!event.target.files.length) return

    let file = event.target.files[0],
        reader = new FileReader()

    reader.readAsDataURL(file)
    reader.onload = e => callback(e.target.result)
    },

    scanktp() {
        if (document.getElementById('ktp').files[0]) {

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
                'Authorization': localStorage.getItem('utoken')
            },
            body: data
        })
        .then(async response => {
            response = await response.json()
            resstatus = response.status
            ktp.removeAttribute('disabled')
            if(resstatus){
                this.datanya = response.data
                this.mode = 'verifikasi'
                this.giloading = false
                // pengecekan eror / data kosong
                if(this.datanya.nama == ''){
                    this.errarea.nama = true
                    this.errmsg.nama = 'Mohon lengkapi Nama'
                } 
                if(this.datanya.nik.length != 16){
                    this.errarea.nik = true
                    this.errmsg.nik = 'NIK salah'
                }else
                if(this.datanya.nik == ''){
                    this.errarea.nik = true
                    this.errmsg.nik = 'Mohon lengkapi NIK'
                }
                    
                if(this.datanya.tempat_lahir == ''){
                    this.errarea.tempat_lahir = true
                    this.errmsg.tempat_lahir = 'Mohon lengkapi tempat lahir'
                }
                    
                if(this.datanya.tanggal_lahir == ''){
                    this.errarea.tanggal_lahir = true
                    this.errmsg.tanggal_lahir = 'Mohon lengkapi tanggal lahir'
                }
                    
                if(this.datanya.kelamin != 0 && this.datanya.kelamin != 1){
                    this.errarea.kelamin = true
                    this.errmsg.kelamin = 'Mohon lengkapi jenis kelamin'
                }
                    
                if(this.datanya.golongan_darah == ''){
                    this.errarea.golongan_darah = true
                    this.errmsg.golongan_darah = 'Mohon lengkapi golongan darah'
                }
                    
                if(this.datanya.alamat == ''){
                    this.errarea.alamat = true
                    this.errmsg.alamat = 'Mohon lengkapi alamat'
                }
                    
                if(this.datanya.rt == ''){
                    this.errarea.rt = true
                    this.errmsg.rt = 'Mohon lengkapi rt'
                }
                    
                if(this.datanya.rw == ''){
                    this.errarea.rw = true
                    this.errmsg.rw = 'Mohon lengkapi rw'
                }
                    
                if(this.datanya.kelurahan == ''){
                    this.errarea.kelurahan = true
                    this.errmsg.kelurahan = 'Mohon lengkapi kelurahan'
                }
                    
                if(this.datanya.kecamatan == ''){
                    this.errarea.kecamatan = true
                    this.errmsg.kecamatan = 'Mohon lengkapi kecamatan'
                }
                    
                if(this.datanya.kota == ''){
                    this.errarea.kota = true
                    this.errmsg.kota = 'Mohon lengkapi kota'
                }
                    
                if(this.datanya.provinsi == ''){
                    this.errarea.provinsi = true
                    this.errmsg.provinsi = 'Mohon lengkapi provinsi'
                }
                    
                if(this.datanya.agama == ''){
                    this.errarea.agama = true
                    this.errmsg.agama = 'Mohon lengkapi agama'
                }
                    
                if(this.datanya.perkawinan == ''){
                    this.errarea.perkawinan = true
                    this.errmsg.perkawinan = 'Mohon lengkapi status perkawinan'
                }
                    
                if(this.datanya.pekerjaan == ''){
                    this.errarea.pekerjaan = true
                    this.errmsg.pekerjaan = 'Mohon lengkapi pekerjaan'
                }
                    
                if(this.datanya.kewarganegaraan == ''){
                    this.errarea.kewarganegaraan = true
                    this.errmsg.kewarganegaraan = 'Mohon lengkapi kewarganegaraan'
                }
                
            }else{
                this.errmsg.backscan = response.message
                this.errarea.backscan = true
                this.imageUrl = ''
                this.giloading = false
            }
        })
        }
    },

    //----------(batas suci)----------
    submitData() {
        const id_user = localStorage.getItem('uid')
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
        if(nama == ''||nik == ''||nik.length != 16||tempat_lahir == ''||tanggal_lahir == ''||kelamin == ''||golongan_darah == ''||alamat == ''||rt == ''||rw == ''||kelurahan == ''||kecamatan == ''||kota == ''||provinsi == ''||agama == ''||perkawinan == ''||pekerjaan == ''||kewarganegaraan == ''){
            if(nama == ''){
                this.errarea.nama = true
                this.errmsg.nama = 'Mohon lengkapi Nama'
            } 
            if(nik == ''){
                this.errarea.nik = true
                this.errmsg.nik = 'Mohon lengkapi NIK'
            }else
            if(nik.length != 16){
                this.errarea.nik = true
                this.errmsg.nik = 'NIK salah'
            }
             
            if(tempat_lahir == ''){
                this.errarea.tempat_lahir = true
                this.errmsg.tempat_lahir = 'Mohon lengkapi tempat lahir'
            }
             
            if(tanggal_lahir == ''){
                this.errarea.tanggal_lahir = true
                this.errmsg.tanggal_lahir = 'Mohon lengkapi tanggal lahir'
            }
             
            if(kelamin == ''){
                this.errarea.kelamin = true
                this.errmsg.kelamin = 'Mohon lengkapi jenis kelamin'
            }
             
            if(golongan_darah == ''){
                this.errarea.golongan_darah = true
                this.errmsg.golongan_darah = 'Mohon lengkapi golongan darah'
            }
             
            if(alamat == ''){
                this.errarea.alamat = true
                this.errmsg.alamat = 'Mohon lengkapi alamat'
            }
             
            if(rt == ''){
                this.errarea.rt = true
                this.errmsg.rt = 'Mohon lengkapi rt'
            }
             
            if(rw == ''){
                this.errarea.rw = true
                this.errmsg.rw = 'Mohon lengkapi rw'
            }
             
            if(kelurahan == ''){
                this.errarea.kelurahan = true
                this.errmsg.kelurahan = 'Mohon lengkapi kelurahan'
            }
             
            if(kecamatan == ''){
                this.errarea.kecamatan = true
                this.errmsg.kecamatan = 'Mohon lengkapi kecamatan'
            }
             
            if(kota == ''){
                this.errarea.kota = true
                this.errmsg.kota = 'Mohon lengkapi kota'
            }
             
            if(provinsi == ''){
                this.errarea.provinsi = true
                this.errmsg.provinsi = 'Mohon lengkapi provinsi'
            }
             
            if(agama == ''){
                this.errarea.agama = true
                this.errmsg.agama = 'Mohon lengkapi agama'
            }
             
            if(perkawinan == ''){
                this.errarea.perkawinan = true
                this.errmsg.perkawinan = 'Mohon lengkapi status perkawinan'
            }
             
            if(pekerjaan == ''){
                this.errarea.pekerjaan = true
                this.errmsg.pekerjaan = 'Mohon lengkapi pekerjaan'
            }
             
            if(kewarganegaraan == ''){
                this.errarea.kewarganegaraan = true
                this.errmsg.kewarganegaraan = 'Mohon lengkapi kewarganegaraan'
            }
        }
        else 
        {
            if(!this.eulacheck){
                this.errarea.eula = true
                this.errmsg.eula = 'Wajib menyetujui EULA!'
            }else{
                this.isloading = true
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
                fetch(beapi + 'identity/add', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': localStorage.getItem('utoken')
                    },
                    body: datane
                })
                .then(async response => {
                    response = await response.json()
                    if (response.status) {
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/profile')
                    } 
                    else {
                        
                        if(response.data == 'nik'){
                            this.errarea.nik = true
                            this.errmsg.nik = response.message
                            this.isloading = false
                        
                        }else{
                            this.isloading = false
                            this.errarea.becritical = true
                            this.errmsg.becritical = response.message
                        }
                    }
                })
            }

        }
    }
}))

//----------(batas suci)----------
Alpine.data('forgotpassword', () => ({
    email: '',
    message: '',
    statusnya: '',
    errmsg: '',
    isloading: false,
    flash: false,
    errarea : '',
    flashdatane() {
        if (localStorage.getItem('flash')) {
            this.flash = true
            this.errarea = 'other'
            this.flash = true
            setTimeout(function () {
                localStorage.removeItem('flash')
                this.flash = false
            }, 3000)
        }
    },

    sendemail() {
        if(this.email==''){
            this.flash = true
            setTimeout(() => this.flash = false, 5000)
            this.errarea = 'email'
            this.errmsg = 'email wajib diisi!'
        }else{
            this.isloading = true
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

                if (this.statusnya) {
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/successsendemail')
                }
                else{
                    this.flash = true
                    setTimeout(() => this.flash = false, 5000)
                    this.errarea = 'email'
                    this.errmsg = this.message
                    this.isloading = false
                }
            })
        }
    },

}))

//----------(batas suci)----------
Alpine.data('changepassword', () => ({
    password: '',
    confirmpassword: '',
    isloading: true,
    comploading:false,
    isloading: false,
    isChangePassword:false,
    errmsg: '',
    msg: '',

    submitchangepass() {
        if (this.password != this.confirmpassword) {
            this.errmsg = 'password dan konfirmasi password tidak sesuai!'
        } 
        else if(this.password.length < 8){
            this.errmsg = 'password minimal 8 karakter!'
        }
        else {
            this.comploading = true
            const data = new FormData();
            data.append('password', this.password)

            this.isloading = true

            fetch(beapi + 'user/'+localStorage.getItem('uid')+'/edit', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': localStorage.getItem('utoken')
                },
                body: data
            })
                .then(async response => {
                    response = await response.json()
                    this.message = response.message
                    this.statusnya = response.status

                    if (this.statusnya == true) {
                        this.msg = 'Ganti password sukses'
                        this.isChangePassword=false
                        this.comploading = false
                    }
                    if (this.statusnya == false) {
                        this.errmsg = this.message
                        this.comploading = false
                    }
                })
        }
    },

}))
//----------(batas suci)----------
Alpine.data('changeforgetpassword', () => ({
    password: '',
    confirmpassword: '',
    email: '',
    token: '',
    isloading: true,
    isloading: false,
    errmsg: '',
    cektoken() {
        this.isloading = true
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
        if(this.password == ''){
            this.errmsg = 'Password wajib diisi'
        }else if(this.password.length < 8){
            this.errmsg = 'panjang minimal 8 karakter'
        }else if (this.password != this.confirmpassword) {
            this.errmsg = 'password dan konfirmasi password tidak sesuai!'
        } else {
            const data = new FormData();
            data.append('token', this.token)
            data.append('email', this.email)
            data.append('password', this.password)

            this.isloading = true

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
                    localStorage.setItem('message','Sukses ganti password, silahkan login menggunakan password baru')
                    localStorage.setItem('flash',true)
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
Alpine.data('successvalidation', () => ({

    token: '',
    // isloading: true,
    isloading: false,
    errmsg: '',
    cektoken() {
        token = document.getElementById('token').value
        fetch(beapi + 'emailregist/' + token, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
            }
        })
            .then(async response => {
                response = await response.json()
                statusnya = response.status

                if (statusnya) {
                    this.isloading = false
                    this.email = response.data.email
                    this.token = token
                } else {
                    // localStorage.setItem('flash', true)
                    const baseUrl = window.location.origin
                    // window.location.replace(baseUrl + '/emailvalidation')
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

            this.isloading = true

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

Alpine.data('formresendvalidation', () => ({
    email: '',
    pesanerror : '',
    resendemail() {
        if(this.email == ''){
            this.pesanerror = 'email wajib diisi!'
        }else{

            link = window.location.origin + '/emailvalidation'
            const data = new FormData();
            data.append('email', this.email)
            data.append('link', link)
    
            fetch('http://localhost:8000/api/resendemailvalidation', {
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
                    this.pesanerror = this.message
                }
            })
        }
    },
}))

Alpine.data('auth', () => ({
    beimg: 'http://localhost:8000/storage/',
    userid: '',
    userrole: '',
    isloading: false,
    islogin: false,
    sts: false,
    ceklogin() {
        if (!localStorage.getItem('utoken')) {
            this.islogin = false
            this.isloading = false
        } else {
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
                    if(response.data.id == localStorage.getItem('uid') && response.data.id_role == localStorage.getItem('urole')){
                        this.userid = localStorage.getItem('uid')
                        this.userrole = localStorage.getItem('urole')
                        this.islogin = true
                        this.isloading = false
                    }else{
                        this.islogin = false
                        this.isloading = false
                        localStorage.clear()
                    }
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
    },

    logout() {
        fetch(beapi + 'logout', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': localStorage.getItem('utoken')
            },
        })
        .then(async response => {
            response = await response.json()
            if(response.status){
                localStorage.clear()
                const baseUrl = window.location.origin
                window.location.replace(baseUrl + '/login')
            }else{
                console.log(response.message)
            }
        })
    }
}))


