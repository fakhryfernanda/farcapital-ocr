<div class="self-start mt-8" x-data="dashboard">
    <div x-init="getidentity()"></div>
    <div x-init="isadmin()"></div>
    <h1 class="text-center py-3 text-[30px] font-bold">Daftar User</h1>
    <div class="overflow-x-auto flex container justify-center">
        <table class="border-2 w-full" x-data="{users: []}" x-init="fetch( 'http://localhost:8000/api/dashboard').then(async (response)=>{
            users = await response.json()
            users = users.data
        })">
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
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <template x-for="(item,index) in data">
                    <tr class="bg-white border-2">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" x-text="++index"></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.nik"></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.nama"></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.jenis_kelamin ? 'Laki-Laki' : 'Perempuan'"></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a x-bind:href="window.location.origin+'/profile/'+item.id_user" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</a>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</div>
