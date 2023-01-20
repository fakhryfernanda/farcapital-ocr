<div class="self-start mt-8" >
    {{-- <h1 x-text="getData()"></h1> --}}
    
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
                    
                    {{-- <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Foto
                    </th> --}}
                     <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <template x-for="(user, index) in users" :key= "user.id">
                    <tr class="bg-white border-2">
                        <td x-text="index+1" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{-- <template x-for="index in user">
                                <h1 x-text="index + 1"></h1>
                            </template> --}}
                            {{-- <h1 x-text="user.id"></h1> --}}
                        </td>
                         <td x-text="user.nik" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                           
                        </td>
                        <td x-text="user.nama"  class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            
                        </td>
                       
                       
                        <td x-text="user.jenis_kelamin" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                           
                        </td>
                        
                         {{-- <td x-text="user.ktp" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> --}}
                            {{-- <img src="{{  'http://127.0.0.1:8000/storage/' .  $user["ktp"] }}" alt="ktp" class="w-[100px]"> --}}
                        {{-- </td> --}}
                         <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{-- <a href={{ route('profile', $user["id_user"]) }}> --}}

                                <button x-on:click="window.location.href = '/profile + id'" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Detail</button>
                                <script>
                                    function redirect(){
                                        // window.location.href="profile/{id}";
                                        // window.location.replace(this.baseUrl + '/profile/{id}')
                                        const baseUrl = window.location.origin
                                    window.location.replace(baseUrl + '/profile/{id}')
                                    }
                                </script>
                            {{-- </a> --}}
                        </td>
                    </tr>
                </template>
              
               
                
            </tbody>
        </table>
    </div>
</div>
