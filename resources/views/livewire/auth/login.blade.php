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
            
            {{-- Pesan registrasi berhasil --}}
            {{-- @if($message = Session::get('success'))
                <p class="text-green-500 text-sm font-bold">{{ $message }}</p>
                <p class="text-green-500 text-sm font-bold">Silakan login</p>
            @endif --}}
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
                <div class="px-4 pb-2 pt-4 flex justify-center">
                    <button @click="submit()" class="border-red-500 border block px-4 py-2 text-lg rounded-lg  bg-red-500 font-bold hover:bg-white hover:text-red-500 hover:font-bold focus:outline-none hover:border-red-500 hover:border font-Lato w-1/2">Sign In<p x-text="userrole"></p></button>
                </div>
                <div x-data="auth">
                    
                    <button @click="isadmin()">aaaaaaaaaaa</button>
                    <button @click="logout()">bbbbbbbbbb</button>
                </div>
                
                <div class="text-center text-slate-700 py-2 font-bold font-Lato">
                    <p>Not a member ? <a href="registrasi" class ="text-blue-500  hover:underline font-Lato ">Register here</a></p>
                </div>

        </div>
    </div>
</section>