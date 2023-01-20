<section class="min-h-1/2 flex text-white " x-data="userLogin" >

    <div x-show="isLoading">
        @livewire('loadingscreen')
    </div>
        
    <div x-init="notlogin()"></div>
    
    <div x-show="!isLoading" class="lg:w-[500px] bg-white w-full rounded-xl shadow-lg shadow-gray-600/50 flex items-center justify-center text-center md:px-16 px-0 z-0">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-50 bg-no-repeat bg-cover items-center">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>
        <div class="w-full py-6 z-20">
            
            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            
                <div x-init="flashdata()"></div>
                <div x-show="flash">
                    <div  x-data="{flashdt : true}" :class="{'block' : flashdt, hidden : !flashdt}" x-init="setTimeout(() => flashdt = false, 10000)">
                        <p class="text-green-500" x-text="message"></p>
                    </div>
                </div>
            
                <div class="pb-2 pt-4 text-white flex">
                    <div class="text-2xl p-2 bg-red-500 rounded mx-1 border border-1 border-red-400">
                        <i class="fa-sharp fa-solid fa-envelope"></i>   
                    </div> 
                    <input type="email" x-model="email" placeholder="Email" class="block w-full p-2 text-lg rounded bg-white-50 text-black font-Lato font-bold border-2 border-red-500" x-bind:class="errarea == 'email'?'border border-red-600' : ''" >
                </div>



                {{-- ----------- (error email salah) ------------- --}}
                <template x-if="errarea == 'email'">
                    <span class="text-red-600" x-text="errmsg"></span>
                </template>
                
                <div class="pb-2 pt-4 flex text-white">
                    <div class="text-2xl p-2 bg-red-500 rounded mx-1 border border-1 border-red-400">
                        <i class="fa-solid fa-key"></i>  
                    </div> 
                    <input class="block w-full p-2 text-lg rounded bg-white text-black font-Lato font-bold border-2 border-red-500" x-bind:class="errarea == 'password'?'border border-red-600' : ''" type="password" x-model="password" placeholder="Password">
                </div>
                
                {{-- ----------- (password salah) ------------- --}}
                <template x-if="errarea == 'password'">
                    <span class="text-red-600" x-text="errmsg"></span>
                </template>
                
                {{-- ----------- (akun invalid) ------------- --}}
                <template x-if="errarea == 'invalid'">
                    <span class="text-red-600" x-text="errmsg"></span>
                </template>

                <div class="text-right text-slate-700 hover:underline hover:text-blue-500 underline py-2 font-Lato font-semibold">
                    <a href="/forgotpassword">Forgot your password?</a>
                </div>
                <div class="px-2 pb-2 pt-4">
                    <button @click="submit()" class="border-blue-500 border uppercase block w-full px-4 py-2 text-lg rounded-lg  bg-blue-600 font-bold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border">
                            <svg wire:loading aria-hidden="true" class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        sign in
                    </button>

                
                <div class="text-center text-slate-700 py-2 font-bold font-Lato">
                    <p>Not a member ? <a href="registrasi" class ="text-blue-500  hover:underline font-Lato ">Register here</a></p>
                </div>

         


        </div>
    </div>
</section>