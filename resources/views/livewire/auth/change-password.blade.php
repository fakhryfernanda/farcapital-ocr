<div x-data="changeforgetpassword" x-init="cektoken()" class="flex">
    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>
    <div x-show="!isloading">
    <div x-init="notlogin()"></div>
    <input type="hidden" value="{{$token}}" id="token">
    <template x-if="!isloading">
        <div class="bg-white pb-2 pt-4 px-12 md:w-[500px] rounded-xl shadow-lg shadow-gray-600/50">
            <div>
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <div>
                    <h1 class="font-bold flex justify-center font-Lato text-lg">Ubah password</h1>
                </div>
            </div>

            <div>
                <div class="flex justify-center pb-2 pt-4 mx-auto"> 
                    <div class="text-2xl p-2 text-white rounded mx-1 border border-1" x-bind:class="errmsg == '' ? 'bg-gray-600' : 'bg-red-600'">
                        <i class="fa-solid fa-key"></i>  
                    </div>
                    <input @click="errmsg = ''" type="password" x-model="password" placeholder="Masukan Kata Sandi Baru" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errmsg != ''?' border-red-600' : 'border-gray-600 bg-white'">
                </div>
                <div class="flex justify-center pb-2 pt-4 mx-auto">
                    <div class="text-2xl p-2 text-white rounded mx-1 border border-1" x-bind:class="errmsg == '' ? 'bg-gray-600' : 'bg-red-600'">
                        <i class="fa-solid fa-key"></i>  
                    </div>
                    <input @click="errmsg = ''" type="password" x-model="confirmpassword" placeholder="Ulangi Kata Sandi Baru" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errmsg != ''?' border-red-600' : 'border-gray-600 bg-white'">
                </div>

            </div>
            <div>
                <p class="text-red-600 text-center" x-text="errmsg"></p>
            </div>

            <div class="px-4 pb-10 pt-4 flex justify-center text-white">

                <button  @click="submitchangepass()" class="btn-primary w-1/2">Submit</button>
            </div>
        </div>
    </template>
    </div>
</div>
