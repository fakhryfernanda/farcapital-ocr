<section class="container mb-8" x-data="profile">
    <template x-if="userrole != 1 && userrole != 2">
        <div x-init="logout()"></div>
    </template>
    <div x-show="isloading">
        @livewire('loadingscreen')
</div>
    <template x-if="userrole == 1">
        <div>
            <div x-init="getprofile({{$id}})"></div>
            <div class="py-2" x-show="!isloading">
                <a class="btn-secondary" href="/dashboard">kembali</a>
            </div>
        </div>
    </template>
    
    <template x-if="userrole == 2">
        <div x-init="getprofile(userid)"></div>
    </template>
    <div class="flex flex-col lg:flex-row container mx-auto" x-show="!isloading">

        <div class="bg-gray-300 lg:col-3 rounded-t-lg shadow-lg shadow-gray-300 lg:pb-10" x-data="changepassword">
            <div class="hidden lg:flex justify-center py-10 bg-gray-50">
                <img src="{{ asset('assets/logo.png')}}" alt="" class="w-24 h-24 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
            </div>

            <div class=" flex lg:flex-col px-2 justify-between">

                <div class="font-Lato text-xl text-slate-900 font-bold text-center lg:px-0 py-3">
                    <h1 class="hidden lg:block font-extrabold">Info Akun</h1>
                    <div class="flex justify-center items-center gap-1">
                        <i class="fa-solid fa-envelope"></i>
                        <p class="text-slate-900 font-bold md:font-normal font-Lato text-sm md:text-lg" x-text="data.email"></p>
                    </div>
                </div>

                <div class="flex justify-center flex-row lg:flex-col-reverse gap-2 items-center">
                    <template x-if="msg != ''">
                        <div  x-data="{flashnya : true}" :class="{'block' : flashnya, hidden : !flashnya}" x-init="setTimeout(() => flashnya = false, 5000)">
                            <p class="msgsuccess text-center text-sm lg:text-base" x-text="msg"></p>
                        </div>
                    </template>
                    <template x-if="localStorage.getItem('urole') == 2">
                        <div class="flex flex-col gap-2 text-center">
                            <a href="/scan" class="transition ease-in-out delay-100 font-Lato text-white bg-grayprimary hover:bg-graysecondary focus:ring-4 focus:outline-none focus:ring-graysecondary font-bold rounded-lg text-sm p-2 lg:px-5 lg:py-2.5 text-center items-center lg:hover:-translate-y-1 lg:hover:scale-110 duration-300">Scan Ulang</a>

                            <button  x-on:click="isChangePassword=!isChangePassword" type="button" x-text="isChangePassword? 'Sembunyikan' : 'Ubah Password'" class="transition ease-in-out delay-100 font-Lato text-white bg-redprimary hover:bg-redsecondary focus:ring-4 focus:outline-none focus:ring-redsecondary font-bold rounded-lg text-sm p-2 lg:px-5 lg:py-2.5 text-center inline-flex items-center lg:hover:-translate-y-1 lg:hover:scale-110 duration-300">
                            </button>
                        </div>
                    </template>
                </div>

            </div>

            <hr class="my-2" x-show="isChangePassword" >

            <template x-if="localStorage.getItem('urole') == 2">
                
                <div class="flex flex-col lg:flex-col-reverse"  x-show="isChangePassword" x-transition.duration.200ms>
                    <div class="flex justify-center w-full p-2 items-center lg:flex-col gap-2">
    
                    <div class="w-full">
                        <label for="" class="hidden lg:flex font-Lato font-bold text-md text-slate-700">Password :</label>
                        <input x-model="password" @click="errmsg = ''" type="password" placeholder="Password" class="px-2 py-1 placeholder-slate-400 text-slate-600 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full" x-bind:class="errmsg != '' ? 'border border-red-600':' border-0'"/>
                    </div>
            
                     <div class="w-full">
                        <label for="" class="hidden lg:flex font-Lato font-bold text-md text-slate-700">Konfirmasi Password :</label>
                        <input x-model="confirmpassword" @click="errmsg = ''" type="password" placeholder="Konfirmasi Password" class="px-2 py-1 placeholder-slate-400 text-slate-700 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full" x-bind:class="errmsg != '' ? 'border border-red-600':' border-0'"/>
                    </div>
                    <div class="lg:py-3 lg:px-5 flex justify-center font-Lato">
                       <button @click="submitchangepass()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-3 py-2 lg:px-5 lg:py-2.5 text-center mr-2 inline-flex items-center">
                            <svg x-show="comploading" aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                            Simpan
                        </button>
                    </div>
                </div>  
                <p class="msgerror px-2" x-text="errmsg"></p>
                <div class="mb-2"></div>
            </div>
            </template>
        </div>

        <div class="bg-gray-50 flex flex-col lg:col-9 rounded-t-lg shadow-lg shadow-gray-300">
           
            <div class="mb-3 flex justify-between bg-red-900 items-center">
                <h1 class="p-3 font-Lato font-bold text-xl rounded-sm text-gray-50">Personal Details</h1>
                <div class="flex flex-col" x-data="{isShow:false}">
                    <div class="flex justify-center">
                        <button x-on:click="isShow=!isShow" type="button" class="transition ease-in-out delay-100 font-bold text-slate-800 focus:ring-4 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center mr-2 bg-gray-300/90 hover:bg-gray-200/90 focus:ring-graysecondary inline-flex items-center hover:text-slate-800 duration-300">
                            Lihat KTP
                        </button>
    
                    </div>
        
                    <div class="py-3 fixed z-20 inset-0 bg-slate-500/60 backdrop-blur-sm flex items-center justify-center" x-show="isShow" x-transition.duration.300ms>
                        <div class="px-5 md:px-0 md:w-3/4 h-max overflow-hidden z-10">
                            <img x-bind:src="beimg+data.ktp" alt="Image" class="rounded-lg w-full">
                        </div>
                        <div class="absolute inset-0 -z-10" x-on:click="isShow=false">
        
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="flex flex-col md:flex-row justify-between">
    
                <div class="w-full shadow-slate-400 font-Lato flex flex-col gap-2">
                    
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">NIK</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.nik"></h1>
                    </div>
                    <div> 
                        <h2 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Nama</h2>
                        <h2 class="text-md text-slate-800 font-bold px-3" x-text="data.nama"></h2>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Tempat,Tanggal Lahir</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.tempat_lahir+', '+data.tanggal_lahir"></h1>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Jenis Kelamin</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.jenis_kelamin == '1' ? 'Laki-Laki' : 'Perempuan'"></h1>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Golongan Darah</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.golongan_darah"></h1>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Agama</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.agama"></h1>
                    </div>
                    
                </div>
                
                <div class="w-full shadow-slate-400 font-Lato flex flex-col gap-3 pb-6">
                   <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Alamat</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.alamat"></h1>
                        <table border="0" cellpadding="0">
                            <tr>
                                <td class="text-md text-black font-bold px-3">RT/RW</td>
                                <td class="text-md text-black font-bold px-3">:</td>
                                <td class="text-md text-slate-800 font-normal px-3" x-text="data.rt+'/'+data.rw"></td>
                            </tr>
                            <tr>
                                <td class="text-md text-black font-bold px-3">Kelurahan/Desa</td>
                                <td class="text-md text-black font-bold px-3">:</td>
                                <td class="text-md text-slate-800 font-normal px-3" x-text="data.kelurahan"></td>
                            </tr>
                            <tr>
                                <td class="text-md text-black font-bold px-3">Kecamatan</td>
                                <td class="text-md text-black font-bold px-3">:</td>
                                <td class="text-md text-slate-800 font-normal px-3" x-text="data.kecamatan"></td>
                            </tr>
                            <tr>
                                <td class="text-md text-black font-bold px-3">Kabupaten/Kota</td>
                                <td class="text-md text-black font-bold px-3">:</td>
                                <td class="text-md text-slate-800 font-normal px-3" x-text="data.kota"></td>
                            </tr>
                            <tr>
                                <td class="text-md text-black font-bold px-3">Provinsi</td>
                                <td class="text-md text-black font-bold px-3">:</td>
                                <td class="text-md text-slate-800 font-normal px-3" x-text="data.provinsi"></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Status Perkawinan</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.status_perkawinan"></h1>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Pekerjaan</h2>
                        <h2 class="text-md text-slate-800 font-normal px-3" x-text="data.pekerjaan"></h2>
                    </div>
                
                    <div>
                        <h1 class="text-xl font-bold text-redprimary w-max px-3 rounded-sm">Kewarganegaraan</h1>
                        <h1 class="text-md text-slate-800 font-normal px-3" x-text="data.kewarganegaraan"></h1>
                    </div>
                
                    
                    
                </div>
                
            </div>
    
        </div>
    </div>

</section>
