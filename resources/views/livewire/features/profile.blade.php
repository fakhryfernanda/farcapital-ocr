<section class="container pb-8 flex bg-gray-50" x-data="profile">
    <div class="w-1/3">
        <template x-if="userrole != 1 && userrole != 2">
            <div x-init="logout()"></div>
        </template>
        <template x-if="userrole == 1">
            <div x-init="getprofile({{$id}})"></div>
        </template>
        <template x-if="userrole == 2">
            <div x-init="getprofile(userid)"></div>
        </template>
        <img src="{{ asset('assets/dummy.jpg')}}" alt="" class="h-[400px]">
        
        <div class="mt-8 flex flex-col items-center gap-6">
            {{-- Social Media --}}
            <div class="w-fit text-center">
                <h3 class="text-xl font-semibold">Social Media</h3>
                <div class="text-3xl flex justify-between gap-6">
                    <i class="fa-brands fa-facebook text-blue-700"></i>
                    <i class="fa-brands fa-instagram text-[#3f729b]"></i>
                    <i class="fa-brands fa-twitter text-blue-600"></i>
                    <i class="fa-brands fa-linkedin text-blue-800"></i>
                </div>
            </div>
    
            {{-- Contact --}}
            <div class="w-fit text-center">
                <h3 class="text-xl font-semibold">Contact Me</h3>
                <div>
                    <p class="text-slate-600 text-lg">
                        <i class="fa-solid fa-mobile"></i>
                        <span class="font-semibold">081308130813</span>
                    </p>
                    <p class="text-slate-600 text-lg">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="font-semibold">ridwan@rocketmail.com</span>
                    </p>
                </div>
    
            </div>
    
            {{-- Motto --}}
            <div class="w-fit text-center font-semibold">
                <h3 class="text-xl">Motto</h3>
                <p class="text-lg text-slate-600">
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquid similique iure praesentium sunt consequuntur voluptatem 
                    maxime odio voluptatum minus dolores"
                </p>
            </div>
        </div>
        
    
    </div>

    <div class="w-2/3 rounded-md shadow-slate-400">
        <h1 class="p-6 text-4xl font-bold bg-red-500 w-full rounded-lg text-center text-white">
            Identitas Pribadi
        </h1>
        <div class="px-6 flex flex-col gap-4">
            <div class="py-2 border-b-2 border-red-200">
                <h2 class="text-xl text-slate-800 font-bold " x-text="data.nama"></h2>
                <h2 class="text-lg text-slate-800 font-semibold " x-text="data.pekerjaan"></h2>
            </div>
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">NIK</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.nik"></h1>
            </div>
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Tempat Lahir</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.tempat_lahir"></h1>
            </div>

            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Tanggal Lahir</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.tempat_lahir"></h1>
            </div>

            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Jenis Kelamin</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.jenis_kelamin ? 'Laki-Laki' : 'Perempuan'"></h1>
            </div>
    
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Golongan Darah</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.golongan_darah"></h1>
            </div>
    
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Agama</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.agama"></h1>
            </div>

            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Status Perkawinan</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.status_perkawinan"></h1>
            </div>
    
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Kewarganegaraan</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.kewarganegaraan"></h1>
            </div>
    
            <div class="">
                <h1 class="text-xl text-slate-800 font-bold">Alamat</h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="data.alamat"></h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="'RT '+data.rt+' RW '+data.rw"></h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="'Kelurahan '+data.kelurahan+' Kecamatan '+data.kecamatan"></h1>
                <h1 class="text-lg text-slate-800 font-semibold" x-text="'Kota '+data.kota+' Provinsi '+data.provinsi">
                </h1>
            </div>
        </div>
    </div>
</section>
