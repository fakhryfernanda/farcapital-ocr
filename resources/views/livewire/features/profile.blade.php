
    <section class="min-h-screen overflow-auto flex justify-center background: bg-gradient-to-b from-red-50 to-red-300">
        <div class="container mt-4 mb-4 flex">

            <div class="w-1/3 h-full bg-cover bg-gray-50 rounded-md shadow-slate-400 border-r-2 pb-4">
              {{-- @dd($data) --}}

                <img src="{{ asset('assets/dummy.jpg')}}" alt="" class="w-full h-[400px]">

                <div class="text-center py-4 flex flex-col gap-4">
                    <h1 class="text-xl font-semibold">Social Media</h1>
                    <div class="flex justify-between px-24">
                        <div class="w-10 h-10 text-4xl text-center text-blue-700">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <div class="w-10 h-10 text-4xl text-center text-[#3f729b]">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="w-10 h-10 text-4xl text-center text-blue-600">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                         <div class="w-10 h-10 text-4xl text-center text-blue-800">
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>

                <div class="text-center flex flex-col gap-2 font-semibold py-4 text-xl">
                    <h1>Contact Us</h1>
                    
                    <div>
                        <div class="flex gap-1 justify-center">
                            <div class="w-5 h-5 text-lg text-center text-slate-600">
                                <i class="fa-solid fa-mobile"></i>
                            </div>
                            <div class="text-lg font-semibold text-slate-600">
                                <h1>081308130813</h1>
                            </div>  
                        </div>
        
                        <div class="flex gap-1 justify-center">
                            <div class="w-5 h-5 text-lg text-center text-slate-600">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="text-lg font-semibold text-slate-600">
                                <h1>ridwan@rocketmail.com</h1>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center flex flex-col gap-3 font-semibold py-4 text-xl">
                    <h1>Motto</h1>
                    <div class="text-center font-semibold text-lg text-slate-600">
                        <h1>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Aliquid similique iure praesentium sunt consequuntur voluptatem 
                            maxime odio voluptatum minus dolores"</h1>
                    </div>
                </div>
            
                
            

            <img src="{{ asset('assets/dummy.jpg')}}" alt="" class="w-full h-[400px]">

            <div class="text-center py-8">
                <h1 class="text-2xl font-semibold">Social Media</h1>
            </div>

            {{-- -------------------------(batas suci)----------------------- --}}
            <div class="w-2/3 h-full bg-gray-50 rounded-md shadow-slate-400 pb-6">
                <h1 class="text-2xl font-bold bg-red-500 w-full rounded-lgtext-center text-white py-3 px-3">Identitas Pribadi</h1>
                <div class="p-3 flex flex-col gap-2">
                    <h2 class="text-2xl text-slate-800 font-bold"> {{ $data["nama"] }}</h2>
                    <h2 class="text-xl text-slate-800 font-bold"> {{ $data["pekerjaan"] }} </h2>
                </div>
                <div class="border-red-200 border my-2"></div>
                <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">NIK</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["nik"] }}</h1>
                </div>
                <div class="w-10 h-10 text-4xl text-center text-[#3f729b]">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="w-10 h-10 text-4xl text-center text-blue-600">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                    <div class="w-10 h-10 text-4xl text-center text-blue-800">
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>

                 <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Tempat, Tanggal Lahir</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["tempat_lahir"] }}, {{ $data["tanggal_lahir"] }}</h1>
                </div>
                <div class="text-2xl font-semibold text-slate-600">
                    <h1>081308130813</h1>
                </div>
                
            </div>
                <div class="flex justify-center">
                <div class="w-10 h-10 text-2xl text-center text-slate-600">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="text-2xl font-semibold text-slate-600">
                    <h1>ridwan@rocketmail.com</h1>
                </div>
            </div>

            <div class="text-center font-semibold pt-8 text-2xl">
                <h1>Motto</h1>
            </div>
            <div class="text-center font-semibold text-xl px-3 py-3 text-slate-600">
                <h1>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquid similique iure praesentium sunt consequuntur voluptatem 
                    maxime odio voluptatum minus dolores"</h1>
            </div>
        
        </div>

        <div class="w-2/3 h-full bg-gray-50 rounded-md shadow-slate-400 pb-6">
            <h1 class="text-2xl font-bold bg-red-500 w-full rounded-lgtext-center text-white py-3 px-3">Identitas Pribadi</h1>
            <h2 class="text-4xl text-slate-800 font-bold p-3"> {{ $data["nama"] }}</h2>
            <h2 class="text-2xl text-slate-800 font-bold p-3"> {{ $data["pekerjaan"] }} </h2>
            <div class="border-red-200 border mt-5"></div>
            <div class="p-3 mt-5">
                <h1 class="text-3xl text-slate-800 font-bold">NIK</h1>
                <h1 class="text-2xl text-slate-800 font-semibold">{{ $data["nik"] }}</h1>
            </div>

                <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Jenis Kelamin</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data['jenis_kelamin'] ?  'Laki-Laki' : 'Perempuan' ; }}</h1>
                </div>

                 <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Agama</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["agama"] }}</h1>
                </div>

                <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Status Perkawinan</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["status_perkawinan"] }}</h1>
                </div>

                <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Kewarganegaraan</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["kewarganegaraan"] }}</h1>
                </div>

                <div class="p-3">
                    <h1 class="text-xl text-slate-800 font-bold">Alamat</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">{{ $data["alamat"] }}</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">RT {{ $data["rt"] }} RW {{ $data["rw"] }}</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">Kelurahan {{ $data["kelurahan"] }} Kecamatan {{ $data["kecamatan"] }}</h1>
                    <h1 class="text-lg text-slate-800 font-semibold">Kota {{ $data["kota"] }} {{ $data["provinsi"] }}</h1>
                    {{-- <h1 class="text-xl text-slate-800 font-semibold">Kodepos 45363</h1> --}}
                </div>
            </div>
        </div>
    </section>

