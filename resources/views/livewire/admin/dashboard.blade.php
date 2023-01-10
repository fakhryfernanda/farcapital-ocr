<div class="background: bg-gradient-to-b from-red-50 to-red-200 h-screen">
    <h1 class="text-center py-10 text-[30px] font-bold">Daftar Customer</h1>
    <div class="overflow-x-auto">
        <table class="border-2">
            <thead class="border-b bg-red-500 text-white">
                <tr>
                    <th scope="col"
                        class="text-[20px] font-medium px-6 py-4 text-left ">
                        #
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Nama
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        NIK
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Tempat Lahir
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Tanggal Lahir
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Golongan Darah
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Alamat
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        RT
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        RW
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Desa
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Kecamatan
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Agama
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Status Perkawinan
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Pekerjaan
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Kewarganegaraan
                    </th>
                    <th scope="col" class="text-[20px] font-medium  px-6 py-4 text-left">
                        Berlaku Hingga
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-2">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["nama"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["nik"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["tempat_lahir"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["tanggal_lahir"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["jenis_kelamin"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["golongan_darah"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["alamat"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["rt"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["rw"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["desa"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["kecamatan"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["agama"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["status_perkawinan"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["pekerjaan"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["kewarganegaraan"]}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$user["berlaku_hingga"]}}
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
