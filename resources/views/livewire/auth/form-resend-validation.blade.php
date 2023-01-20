<div x-data="formresendvalidation">
    <div class="bg-white w-full px-10 pb-10 flex flex-col gap-2 ">
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

            <h1 class="font-bold flex justify-center ">Submit ulang email</h1>
        </div>
        <div class=" py-2 flex flex-col">
            <div class="text-gray-500 flex">
                <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div>
                <input type="email" x-model="email" placeholder="ex: user@farcapital.com" class="block w-full p-2 text-lg rounded bg-gray-200 text-black" x-bind:class="pesaneror == ''? '' : 'border-red-600 border'">
            </div>
            <p x-text="pesaneror" class="text-red-600 font-light text-center"></p>
        </div>
        
        <button type="submit" @click="resendemail()" class="text-center border-[rgb(101,13,29)] border  block w-full px-4 py-1 text-lg rounded-lg  bg-[rgb(112,13,29)] text-white font-semibold hover:bg-white hover:text-[rgb(112,13,29)] hover:font-bold focus:outline-none hover:border-[rgb(112,13,29)] hover:border" >submit</button>
    </div>

</div>
