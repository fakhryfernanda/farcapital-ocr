
    <div x-data="forgotpassword" class="min-h-1/2">
    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>

    <div x-show="!isloading" class="bg-white px-10 pb-10 flex flex-col gap-2 w-[500px] rounded-xl shadow-lg shadow-gray-600/50">
        <div class="pb-2 pt-4">
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            <div x-init="flashdatane()"></div>
            <div x-show="flash">
                <div  x-data="{flashnya : true}" :class="{'block' : flashnya, hidden : !flashnya}" x-init="setTimeout(() => flashnya = false, 5000)">
                    <p class="text-red-600 text-center">Link salah atau kadaluarsa, silahkan reset ulang!</p>
                </div>
            </div>

            <h1 class="font-bold flex justify-center font-Lato text-lg">Lupa password?</h1>
            <h1 class=" flex justify-center font-Lato text-lg">Silahkan ketik email akun anda</h1>
        </div>

        <div class="py-2 flex flex-col">
            <div class="text-white flex justify-center">
                <div class="text-2xl p-2 bg-red-500 rounded mx-1 border border-1 border-red-400">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div>
                <input type="email" x-model="email" placeholder="ex: user@farcapital.com" class="block w-80 p-2 text-lg rounded bg-white text-black font-Lato font-bold border border-1 border-red-400" x-bind:class="pesaneror == ''? '' : 'border-red-600 border'">
            </div>
            <div>
                <p x-text="pesaneror" class="text-red-600 text-center py-2 font-Lato font-bold capitalize"></p>
            </div>
            <input type="hidden" id="link" value="{{$link}}">
        </div>

        <div class="flex justify-center px-4 pb-2 pt-4">
            <button type="submit" @click="sendemail()" class="text-center border-red-500 border block w-1/2 px-4 py-2 text-lg rounded-lg  bg-red-500 text-white font-bold font-Lato hover:bg-white hover:text-red-500 hover:font-bold focus:outline-none hover:border-red-500 hover:border" >Submit</button>
        </div>
    </div>
    {{-- </div> --}}
</div>
