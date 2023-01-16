const { method } = require("lodash")

    Alpine.data('dashboard', () =>({
        data: 'saya',
        getData() {
            return 'Ridwan'
        }
        
    }))

    //   Alpine.data('users', () =>({
    //     baseUrl: 'http://localhost:8000/api/dashboard',
    //    async getData() {
    //     var response = await fetch(method: 'GET',
    //     {

    //     })
           
    //     }
        
    // }))