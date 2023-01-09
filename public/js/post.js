
    Alpine.data('scan', () =>({
        form: { 
            image: '',
        },
        mode : 'scan',
        datanya : {},
        submitData() {
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

                this.mode = 'verifikasi'
                
                // const keys = Object.keys(this.datanya)
                // this.nik = keys.map(nik => this.datanya[nik])
                // console.log(this.datanya)
                
            })

            }
    }))
    
    