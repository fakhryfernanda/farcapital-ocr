
    Alpine.data('scan', () =>({
        form: { 
            image: '',
            ktp: '',
            nik: '',
            nama: '',
            tempat_lahir: '',
            tanggal_lahir: '',
            kelamin: '',
            golongan_darah: '',
            alamat: '',
            rt: '',
            rw: '',
            kelurahan: '',
            kecamatan: '',
            kota: '',
            provinsi: '',
            agama: '',
            perkawinan: '',
            pekerjaan: '',
            kewarganegaraan: ''
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
            this.form.ktp = document.getElementById('ktp').files[0]
            this.form.nik = document.getElementById('nik').value
            this.form.nama = document.getElementById('nama').value
            this.form.tempat_lahir = document.getElementById('tempat_lahir').value
            this.form.tanggal_lahir = document.getElementById('tanggal_lahir').value
            this.form.kelamin = document.getElementById('kelamin').value
            this.form.golongan_darah = document.getElementById('golongan_darah').value
            this.form.alamat = document.getElementById('alamat').value
            this.form.rt = document.getElementById('rt').value
            this.form.rw = document.getElementById('rw').value
            this.form.kelurahan = document.getElementById('kelurahan').value
            this.form.kecamatan = document.getElementById('kecamatan').value
            this.form.kota = document.getElementById('kota').value
            this.form.provinsi = document.getElementById('provinsi').value
            this.form.agama = document.getElementById('agama').value
            this.form.perkawinan = document.getElementById('perkawinan').value
            this.form.pekerjaan = document.getElementById('pekerjaan').value
            this.form.kewarganegaraan = document.getElementById('kewarganegaraan').value
           

            const data = new FormData();
            data.append('ktp', this.form.ktp)
            data.append('nik', document.getElementById('nik').value)
            data.append('nama', this.form.nama)
            data.append('tempat_lahir', this.form.tempat_lahir)
            data.append('tanggal_lahir', this.form.tanggal_lahir)
            data.append('kelamin', this.form.kelamin)
            data.append('golongan_darah', this.form.golongan_darah)
            data.append('alamat', this.form.alamat)
            data.append('rt', this.form.rt)
            data.append('rw', this.form.rw)
            data.append('kelurahan', this.form.kelurahan)
            data.append('kecamatan', this.form.kecamatan)
            data.append('kota', this.form.kota)
            data.append('provinsi', this.form.provinsi)
            data.append('agama', this.form.agama)
            data.append('perkawinan', this.form.perkawinan)
            data.append('pekerjaan', this.form.pekerjaan)
            data.append('kewarganegaraan', this.form.kewarganegaraan)
            this.loading = true
            fetch('http://localhost:8000/api/identity/add', {
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
                this.mode = 'scan'
            })

        }
    }))
    
    