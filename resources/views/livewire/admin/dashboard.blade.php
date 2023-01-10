<div class="background: bg-gradient-to-b from-red-50 to-red-200 h-screen">
    <h1 class="text-center py-3 text-[30px] font-bold">Daftar Customer</h1>
    <div class="overflow-x-auto flex container justify-center">
        <table class="border-2 w-full">
            <thead class="border bg-red-500 text-white">
                <tr>
                    <th scope="col"
                        class="text-sm font-medium px-6 py-4 text-left ">
                        No
                    </th>
                     <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        NIK
                    </th>
                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Nama
                    </th>
                
                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Jenis Kelamin
                    </th>
                    
                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Foto
                    </th>
                     <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                <tr class="bg-white border-2">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $loop->iteration }}
                    </td>
                     <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["nik"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["nama"]}}
                    </td>
                   
                   
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["jenis_kelamin"] ?  'Laki-Laki' : 'Perempuan' ;}}
                    </td>
                    
                     <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["foto"]}}
                    </td>
                     <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href={{ route('profile', $user["id_user"]) }}>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</button>
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
