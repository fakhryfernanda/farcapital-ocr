<section class="container mb-8 flex" x-data="profile">
    <template x-if="userrole != 1 && userrole != 2">
        <div x-init="logout()"></div>
    </template>
    <template x-if="userrole == 1">
        <div x-init="getprofile({{$id}})"></div>
    </template>
    <template x-if="userrole == 2">
        <div x-init="getprofile(userid)"></div>
    </template>

    <div class="bg-gray-300 h-screen col-3 rounded-t-lg shadow-lg shadow-gray-300">
        <div class="flex justify-center py-10 bg-gray-50 ">
            <img src="{{ asset('assets/logo.png')}}" alt="" class="w-24 h-24 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
        </div>

        <div class="font-Lato text-xl text-slate-900 font-bold text-center py-5 underline">
            <h1 class="font-extrabold">Info Account</h1>
        </div>

        <div class="flex justify-center">
            <h1 class="text-lg text-slate-900 font-bold w-max py-1 px-2 rounded-sm">Email :</h1>
        </div>
        <div class="py-2">
            <p class="text-slate-900 text-lg text-center">
            <i class="fa-solid fa-envelope"></i>
            <span class="font-semibold font-Lato text-lg underline">ridwan@rocketmail.com</span>
            </p>
        </div>
  
        {{-- <div class="mt-8 flex flex-col items-center gap-6">
            
            <div class="w-fit text-center">
                <h3 class="text-xl font-semibold">Social Media</h3>
                <div class="text-3xl flex justify-between gap-6">
                    <i class="fa-brands fa-facebook text-blue-700"></i>
                    <i class="fa-brands fa-instagram text-[#3f729b]"></i>
                    <i class="fa-brands fa-twitter text-blue-600"></i>
                    <i class="fa-brands fa-linkedin text-blue-800"></i>
                </div>
            </div>
    
            <div class="w-fit text-center">
                <h3 class="text-xl font-semibold">Contact Me</h3>
                <div>
                    <p class="text-slate-600 text-lg">
                        <i class="fa-solid fa-mobile"></i>
                        <span class="font-semibold">081308130813</span>
                    </p>
                   
                </div>
    
            </div>
    
            
            <div class="w-fit text-center font-semibold">
                <h3 class="text-xl">Motto</h3>
                <p class="text-lg text-slate-600">
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquid similique iure praesentium sunt consequuntur voluptatem 
                    maxime odio voluptatum minus dolores"
                </p>
            </div>
        </div> --}}
        <div class="flex justify-center py-4 flex-col gap-4" x-data="{isChangePassword:false}">

            <div class="flex justify-center">
                <button x-on:click="isChangePassword=!isChangePassword" type="button" x-text="isChangePassword? 'Sembunyikan' : 'Ubah Password'" class="transition ease-in-out delay-100 font-Lato text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center hover:-translate-y-1 hover:scale-110 duration-300">
              
              </button>
            </div>

            <div x-show="isChangePassword" x-transition.duration.200ms>

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



        <div class="mb-3 py-3 px-5 flex justify-center">

        </div>
    
    </div>


    <div class="bg-gray-50 flex flex-col col-9  mx-3 rounded-t-lg shadow-lg shadow-gray-300">
       
        <div class="mb-5">
            <h1 class="bg-red-900 p-4 font-Lato font-bold text-center text-2xl rounded-sm text-gray-50">Personal Details</h1>
        </div>

        <div class="flex">

            <div class="w-1/2 rounded-md shadow-slate-400 font-Lato flex flex-col gap-3 px-8">
                
                    <div class=""> 
                        <h2 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Nama</h2>
                        <h2 class="text-xl text-slate-800 font-bold py-1 px-3" x-text="data.nama"></h2>
                    </div>
                    <div class="">
                        <h2 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Pekerjaan</h2>
                        <h2 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.pekerjaan"></h2>
                    </div>
                    <div class="">
                        <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">NIK</h1>
                        <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.nik"></h1>
                    </div>
                    <div class="">
                        <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Tempat Lahir</h1>
                        <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.tempat_lahir"></h1>
                    </div>
        
                    <div class="">
                        <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Tanggal Lahir</h1>
                        <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.tanggal_lahir"></h1>
                    </div>
        
                    <div class="">
                        <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Jenis Kelamin</h1>
                        <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.jenis_kelamin ? 'Laki-Laki' : 'Perempuan'"></h1>
                    </div>
            
                    <div class="">
                        <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Golongan Darah</h1>
                        <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.golongan_darah"></h1>
                    </div>
                   
            </div>
        
            <div class="w-1/2 rounded-md shadow-slate-400 font-Lato flex flex-col gap-3 px-8 pb-6">
                
            
                <div class="">
                    <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Agama</h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.agama"></h1>
                </div>
            
                <div class="">
                    <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Status Perkawinan</h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.status_perkawinan"></h1>
                </div>
            
                <div class="">
                    <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Kewarganegaraan</h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.kewarganegaraan"></h1>
                </div>
            
                <div class="">
                    <h1 class="text-xl text-white font-bold bg-red-900 w-max py-1 px-3 rounded-sm">Alamat</h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="data.alamat"></h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="'RT '+data.rt+' RW '+data.rw"></h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="'Kelurahan '+data.kelurahan+' Kecamatan '+data.kecamatan"></h1>
                    <h1 class="text-xl text-slate-800 font-semibold py-1 px-3" x-text="'Kota '+data.kota+' Provinsi '+data.provinsi">
                    </h1>
                </div>

                <div class="flex flex-col" x-data="{isShow:false}">

                    <div>

                        <button x-on:click="isShow=!isShow" type="button" class="transition ease-in-out delay-100 font-bold text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center hover:text-white hover:-translate-y-1 hover:scale-110 duration-300">
                            Lihat Ktp
                        </button>

                    </div>

                    <div class="py-3 fixed z-20 inset-0 bg-slate-500/60 backdrop-blur-sm flex items-center justify-center" x-show="isShow" x-transition.duration.300ms>
                        <div class="w-1/3 h-max overflow-hidden z-10">
                            <img x-bind:src="beimg+data.ktp" alt="Image" class="rounded-lg w-full">
                        </div>
                        <div class="absolute inset-0 -z-10" x-on:click="isShow=false">

                        </div>
                    </div>
 
                </div>
        
            </div>
            
        </div>
        

    </div>



</section>
