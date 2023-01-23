<div x-data="changeforgetpassword" x-init="cektoken()" class="flex">
    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>
    <div x-show="!isloading">
    <div x-init="notlogin()"></div>
    <input type="hidden" value="{{$token}}" id="token">
    <template x-if="!isloading">
        <div class="bg-white pb-2 pt-4 w-[500px] rounded-xl shadow-lg shadow-gray-600/50">
            <div>
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <div>
                    <h1 class="font-bold flex justify-center font-Lato text-lg">Change your password</h1>
                </div>
            </div>

            <div>

                <div class="flex justify-center w-3/4 pb-2 pt-4 mx-auto"> 
                    <div class="text-2xl p-2 bg-red-500 rounded mx-1 border border-1" x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                        <i class="fa-solid fa-key"></i>  
                    </div>
                    <input type="password" x-model="password" placeholder="Masukan Kata Sandi Baru" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'?'border border-red-600' : 'border-gray-600 bg-white'">
                </div>
                <div class="flex justify-center w-3/4 pb-2 pt-4 mx-auto">
                    <div class="text-2xl p-2 bg-red-500 rounded mx-1 border border-1 border-red-400 text-white">
                        <i class="fa-solid fa-key"></i>  
                    </div>
                    <input type="password" x-model="confirmpassword" placeholder="Ulangi Kata Sandi Baru" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 "
                    x-bind:class="errarea == 'password'?'border border-red-600' : 'border-gray-600 bg-white'">
                </div>

            </div>
            <div>
                <p class="text-red-600 text-center" x-text="errmsg"></p>
            </div>

            <div class="flex justify-center">
                <h2 class="text-xs font-Lato font-semibold">*Kata Sandi Minimal 8 karakter</h2>
            </div>
            <div class="px-4 pb-10 pt-4 flex justify-center text-white">

                <button  @click="submitchangepass()" class="border-red-500 border block px-4 py-2 text-lg rounded-lg  bg-red-500 font-bold hover:bg-white hover:text-red-500 hover:font-bold focus:outline-none hover:border-red-500 hover:border font-Lato w-1/2">Change Password</button>
            </div>
        </div>
    </template>
    </div>
</div>
