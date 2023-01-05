<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1 class="text-center py-10 text-[30px] font-bold">Daftar Customer</h1>
    <div class="overflow-x-auto">
        <table class="border-2">
            <thead class="border-b bg-blue-100">
                <tr>
                    <th scope="col"
                        class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left boder-r">
                        #
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Nama
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        NIK
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Tempat Lahir
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Tanggal Lahir
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Golongan Darah
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Alamat
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        RT
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        RW
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Desa
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Kecamatan
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Agama
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Status Perkawinan
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Pekerjaan
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
                        Kewarganegaraan
                    </th>
                    <th scope="col" class="text-[20px] font-medium text-gray-900 px-6 py-4 text-left">
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
                <tr class="border-2">
                    <td class="px-6 py-4 whitespace-nowrap text-[16px] font-medium text-gray-900">1</td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Fakhry Fernanda
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        330508030420000001
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Bekasi
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        03/04/2000
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        L
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        A
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Tambun selatan
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        004
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        004
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Tambun Selatan
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Tambun
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Islam
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Belum Kawin
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Mahasiswa
                    </td>
                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        WNI
                    </td>

                    <td class="text-[16px] text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Seumur hidup
                    </td>
                </tr>
                
                <tr class="bg-white border-2">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Cell
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
