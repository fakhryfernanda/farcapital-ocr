
    Alpine.data('scan', () =>({
        form: { 
            image: '',
            // ktp: '',
            // nik: '',
            // nama: '',
            // tempat_lahir: '',
            // tanggal_lahir: '',
            // kelamin: '',
            // golongan_darah: '',
            // alamat: '',
            // rt: '',
            // rw: '',
            // kelurahan: '',
            // kecamatan: '',
            // kota: '',
            // provinsi: '',
            // agama: '',
            // perkawinan: '',
            // pekerjaan: '',
            // kewarganegaraan: ''
        },
        mode : 'scan',
        datanya : {},
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
                anjay = await response.json()
                this.datanya = anjay.data
                console.log(this.datanya)

                this.mode = 'verifikasi'
                
            })
        },

        //----------(batas suci)----------
        submitData() {
            const ktp = document.getElementById('ktp').files[0]
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
                anjay = await response.json()
                this.datanya = anjay.data
                console.log(this.datanya)
                this.mode = 'scan'
            })

        }
    }))
    
    