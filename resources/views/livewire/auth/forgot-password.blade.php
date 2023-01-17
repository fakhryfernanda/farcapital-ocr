
    <div x-data="forgotpassword">
    <div x-show="isLoading">
        @livewire('loadingscreen')
    </div>
    {{-- <div x-show="isLoading" class="bg-white fixed z-10 top-0 bottom-0 left-0 right-0"></div> --}}
    {{-- Loading Spinner --}}

    {{-- <div x-show="isLoading" class="z-20 absolute top-2/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="flex items-center justify-center space-x-2 animate-bounce">
            <div class="w-8 h-8 bg-red-200 rounded-full"></div>
            <div class="w-8 h-8 bg-red-300 rounded-full"></div>
            <div class="w-8 h-8 bg-red-400 rounded-full"></div>
        </div>
        <div>
            <div class="py-5">
            <h2 class="text-center text-slate-900 text-xl font-semibold animate-pulse">Loading...</h2>
            </div>
        </div>
    </div> --}}
        {{-- <div x-show="!bgTrans" class="bg-black/50"> --}}
    <div x-show="!isLoading" class="bg-white w-full px-10 pb-10 flex flex-col gap-2 ">
        <div>
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            <div x-init="flashdatane()"></div>
            <div x-show="flash">
                <div  x-data="{flashnya : true}" :class="{'block' : flashnya, hidden : !flashnya}" x-init="setTimeout(() => flashnya = false, 5000)">
                    <p class="text-red-600 text-center">Link kadaluarsa, silahkan reset ulang!</p>
                </div>
            </div>

            <h1 class="font-bold flex justify-center ">Reset your password</h1>
        </div>
        <div class=" py-2 flex flex-col">
            <div class="text-gray-500 flex">
                <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div>
                <input type="email" x-model="email" placeholder="ex: user@farcapital.com" class="block w-full p-2 text-lg rounded bg-gray-200 text-black" x-bind:class="pesaneror == ''? '' : 'border-red-600 border'">
            </div>
            <p x-text="pesaneror" class="text-red-600 font-light text-center"></p>
            <input type="hidden" id="link" value="{{$link}}">
        </div>
        
        <button type="submit" @click="sendemail()" class="text-center border-[rgb(101,13,29)] border  block w-full px-4 py-1 text-lg rounded-lg  bg-[rgb(112,13,29)] text-white font-semibold hover:bg-white hover:text-[rgb(112,13,29)] hover:font-bold focus:outline-none hover:border-[rgb(112,13,29)] hover:border" >submit</button>
    </div>
    {{-- </div> --}}
</div>
