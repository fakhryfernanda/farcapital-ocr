
    Alpine.data('scan', () =>({
        form: { 
            image: '',
        },
        mode : 'scan',
        datanya : {},
        scanUlang(){
            this.datanya = {},
            this.mode = 'scan'
        },
        scanktp() {
            this.form.image = document.getElementById('ktp').files[0]

            const data = new FormData();
            data.append('image', this.form.image)
            this.loading = true
            
            fetch('http://localhost:8000/api/upload', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            })
            .then(async response => {
                response = await response.json()
                this.datanya = response.data
                console.log(this.datanya)

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
            datane.append('id_user',  id_user)
            datane.append('ktp',  ktp)
            datane.append('nik',  nik)
            datane.append('nama',  nama)
            datane.append('tempat_lahir',  tempat_lahir)
            datane.append('tanggal_lahir',  tanggal_lahir)
            datane.append('jenis_kelamin',  kelamin)
            datane.append('golongan_darah',  golongan_darah)
            datane.append('alamat',  alamat)
            datane.append('rt',  rt)
            datane.append('rw',  rw)
            datane.append('kelurahan',  kelurahan)
            datane.append('kecamatan',  kecamatan)
            datane.append('kota',  kota)
            datane.append('provinsi',  provinsi)
            datane.append('agama',  agama)
            datane.append('status_perkawinan',  perkawinan)
            datane.append('pekerjaan',  pekerjaan)
            datane.append('kewarganegaraan',  kewarganegaraan)
            console.log(datane)
            this.loading = true
            fetch('http://localhost:8000/api/identity/add', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: datane
            })
            .then(async response => {
                response = await response.json()
                this.datanya = response.data
                console.log(this.datanya)
                this.mode = 'scan'
            })

            const baseUrl = window.location.origin
            window.location.replace(baseUrl + '/profile')

        }
    }))

    //----------(batas suci)----------
    Alpine.data('forgotpassword', () =>({
        email:'',
        message : '',
        statusnya : '',
        pesaneror : '',
        flash : false,
        flashdatane(){
            if(localStorage.getItem('flash')){
                this.flash = true
                setTimeout(function(){
                    localStorage.removeItem('flash')
                    this.flash = false
                },3000)
            }
        },

        sendemail() {
            const data = new FormData();
            data.append('email', this.email)
            data.append('link', document.getElementById('link').value)
            data.append('from', document.getElementById('from').value)
            data.append('target', document.getElementById('target').value)
           
            fetch('http://localhost:8000/api/user/reset', {
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
                
                if(this.statusnya == true){
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/successsendemail')
                }
                if(this.statusnya == false){
                    this.pesaneror = this.message
                }
            })
        },

    }))

    //----------(batas suci)----------
    Alpine.data('changeforgetpassword', () =>({
        password : '',
        confirmpassword : '',
        email : '',
        token : '',
        isloading:true,
        errmsg : '',
        cektoken() {
            token = document.getElementById('token').value
            console.log('token')
            fetch('http://localhost:8000/api/emailbytoken/'+token, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                }
            })
            .then(async response => {
                response = await response.json()
                statusnya = response.status
                console.log(statusnya)

                if(statusnya ==true){
                    this.isloading = false
                    this.email = response.data.email
                    this.token = token
                }else{
                    localStorage.setItem('flash',true)
                    const baseUrl = window.location.origin
                    window.location.replace(baseUrl + '/forgotpassword')
                }
            })
        },
        
        submitchangepass() {
            if(this.password != this.confirmpassword){
                this.errmsg = 'password dan konfirmasi password tidak sesuai!'
            }else{
                const data = new FormData();
                data.append('token', this.token)
                data.append('email', this.email)
                data.append('password', this.password)

                fetch('http://localhost:8000/api/changeforgotpass/', {
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
                    
                    if(this.statusnya == true){
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/login')
                    }
                    if(this.statusnya == false){
                        this.errmsg = this.message
                    }
                })
            }  
        },

    }))

    //----------(batas suci)----------
    Alpine.data('userRegister',() => ({
        email : '',
        password : '',
        confirmpassword : '',

        errmsg : '',
        errarea : '',
        message : '',

        submit(){
            if(this.password != this.confirmpassword){
                this.errarea = 'password'
                this.errmsg = 'password dan konfirmasi password tidak sesuai!'
            }else if(this.password.length < 8){
                this.errarea = 'password'
                this.errmsg = 'panjang password minimal 8 karakter!'
            }else{
                const data = new FormData();
                data.append('email', this.email)
                data.append('password', this.password)

                fetch('http://localhost:8000/api/user/add', {
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
                    
                    if(this.statusnya == true){
                        const baseUrl = window.location.origin
                        window.location.replace(baseUrl + '/login')
                    }
                    if(this.statusnya == false){
                        this.errarea = response.data
                        this.errmsg = this.message
                    }
                })
            }
        }
    }))
