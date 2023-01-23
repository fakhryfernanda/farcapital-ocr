<div x-data="formresendvalidation">
    <div class="lg:w-[500px] bg-white px-10 pb-10 flex flex-col gap-3 rounded-xl shadow-lg shadow-gray-600/50">
        <div>
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            {{-- <div x-init="flashdatane()"></div>
            <div x-show="flash">
                <div  x-data="{flashnya : true}" :class="{'block' : flashnya, hidden : !flashnya}" x-init="setTimeout(() => flashnya = false, 5000)">
                    <p class="text-red-600 text-center">Link kadaluarsa, silahkan reset ulang!</p>
                </div>
            </div> --}}

            <h1 class="font-bold flex justify-center ">Kirim ulang link aktivasi akun anda.</h1>
            {{-- <h1 class="font-bold flex justify-center ">Ketik email yang anda gunakan ketika registrasi akun</h1> --}}
        </div>
        <div class=" py-2 flex flex-col">
            <div class="text-gray-500 flex">
                <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div>
                <input type="email" x-model="email" placeholder="ex: user@farcapital.com" class="w-full p-2 text-lg rounded bg-gray-200 text-black" x-bind:class="pesanerror == ''? '' : 'border-red-600 border'">
            </div>
            <p x-text="pesanerror" class="text-red-600 font-light text-center"></p>
        </div>
        <div class="flex justify-center">
            <button type="submit" @click="resendemail()" class="btn-primary w-1/2" >Send</button>
        </div>
    </div>

</div>
