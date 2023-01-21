<div class="self-start m-2" x-data="dashboard" style="width: 100%">
    <div x-init="getidentity()"></div>
    <div x-init="isadmin()"></div>

    <div class="flex container mx-auto">

        <div class="bg-gray-300 h-screen col-3 rounded-t-lg shadow-lg shadow-gray-300">

            <div class="flex justify-center py-10 bg-gray-50 rounded-t-lg mb-5">

            <img src="{{ asset('assets/logo.png')}}" alt="" class="w-24 h-24 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">

            </div>


            <div class="flex justify-center flex-col gap-4" x-data="{isChangePassword:false}">

                <div class="flex justify-center">
                    <button x-on:click="isChangePassword=!isChangePassword" type="button" x-text="isChangePassword? 'Sembunyikan' : 'Ubah Password'" class="transition ease-in-out delay-100 font-Lato text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center hover:-translate-y-1 hover:scale-110 duration-300">
                
                    </button>
                </div>

                <div x-show="isChangePassword" x-transition.duration.200ms class="gap-4">

                    <div class="pt-0 px-5">
                    <label for="" class="font-Lato font-bold text-md text-slate-700">Kata Sandi :</label>
                    <input type="password" placeholder="Password" class="px-2 py-1 placeholder-slate-400 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
                    </div>
        
                    <div class="pt-0 px-5">
                    <label for="" class="font-Lato font-bold text-md text-slate-700">Ulangi Kata Sandi :</label>
                    <input type="password" placeholder="Konfirmasi Password" class="px-2 py-1 placeholder-slate-400 text-slate-700 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
                    </div>

                    <div class="mb-3 py-3 px-5 flex justify-center font-Lato">
                   <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                    </svg>
                    Submit
                    </button>
                </div>
            </div>
    

            </div>

            
        </div>

        

        <div class="bg-gray-50 flex flex-col col-9  mx-3 rounded-t-lg shadow-lg shadow-gray-300">
            <h1 class="text-center py-3 text-3xl font-bold font-Lato text-slate-700">Daftar User</h1>
            <div class="mx-3">
                <table class="border-2 w-full" x-data="{users: []}" x-init="fetch( 'http://localhost:8000/api/dashboard').then(async (response)=>{
                    users = await response.json()
                    users = users.data
                })">
                    <thead class="border bg-red-900 text-white font-Lato">
                        <tr>
                            <th scope="col"
                                class="text-sm font-bold px-6 py-4 text-left ">
                                No
                            </th>
                            <th scope="col" class="text-sm font-bold px-6 py-4 text-left">
                                NIK
                            </th>
                            <th scope="col" class="text-sm font-bold  px-6 py-4 text-left">
                                Nama
                            </th>
                        
                            <th scope="col" class="text-sm font-bold  px-6 py-4 text-left">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="text-sm font-bold  px-6 py-4 text-left">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="(item,index) in data">
                            <tr class="bg-white border-2">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-700" x-text="++index">
                                </td>
                                <td class="text-sm text-slate-700 font-Lato font-bold px-6 py-4 whitespace-nowrap" x-text="item.nik"></td>
                                <td class="text-sm text-slate-700 font-Lato font-bold px-6 py-4 whitespace-nowrap" x-text="item.nama"></td>
                                <td class="text-sm text-slate-700 font-Lato font-bold px-6 py-4 whitespace-nowrap" x-text="item.jenis_kelamin ? 'Laki-Laki' : 'Perempuan'"></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <a x-bind:href="window.location.origin+'/profile/'+item.id_user" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
