<div x-data="formresendvalidation">
    <div class="md:w-[500px] bg-white px-12 pb-10 flex flex-col gap-3 rounded-xl shadow-lg shadow-gray-600/50">
        <div>
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>

            <h1 class="font-bold flex justify-center ">Kirim ulang link aktivasi akun anda.</h1>
        </div>
        <div class=" py-2 flex flex-col">
            <div class="text-white flex gap-1">
                <div class="text-2xl p-2 bg-gray-600 border-gray-400 rounded">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div>
                <input type="email" x-model="email" placeholder="ex: user@farcapital.com" class="block w-full p-2 text-lg rounded bg-white border-2 border-gray-600 text-black" x-bind:class="pesaneror == ''? '' : 'border-red-600 border'">
            </div>
            <p x-text="pesanerror" class="text-red-600 italic text-center"></p>
        </div>
        <div class="flex justify-center mt-3">
            <button type="submit" @click="resendemail()" class="btn-primary w-1/2" >Send</button>
        </div>
    </div>

</div>
