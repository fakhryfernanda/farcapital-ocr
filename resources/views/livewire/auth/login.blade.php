<section class="min-h-1/2 flex text-white " x-data="userLogin" >

    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>
        
    <div x-init="notlogin()"></div>
    
    <div x-show="!isloading" class="lg:w-[500px] bg-white w-full rounded-xl shadow-lg shadow-gray-600/50 flex items-center justify-center text-center md:px-16 px-0 z-0">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-50 bg-no-repeat bg-cover items-center">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>

        <div class="w-full py-6 z-20">
            
            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}">
            </div>
            
            <div x-init="flashdata()"></div>
            <div x-show="flash">
                <div x-data="{flashdt : true}" :class="{'block' : flashdt, hidden : !flashdt}" x-init="setTimeout(() => flashdt = false, 10000)">
                    <p class="text-green-500" x-text="message"></p>
                </div>
            </div>
            
            <div class="pb-2 pt-4 text-white flex">
                <div class="text-2xl p-2 rounded mx-1 border border-1" x-bind:class="errarea == 'email' ? 'bg-red-500 border-red-400' : 'bg-gray-500 border-gray-400'">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div> 

                <input @keydown.enter="submit()" type="email" x-model="email" placeholder="Email"  class="block w-full p-2 text-lg rounded text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'email'?'border border-red-600  bg-red-100' : 'border-gray-500 bg-white'">
            </div>

            {{-- ----------- (error email salah) ------------- --}}
            <template x-if="errarea == 'email'">
                <span class="text-red-600" x-text="errmsg"></span>
            </template>
            
            <div class="pb-2 pt-4 flex text-white">
                <div class="text-2xl p-2 rounded mx-1 border border-1" x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-500 border-gray-400'">
                    <i class="fa-solid fa-key"></i>  
                </div> 
                <input @keydown.enter="submit()" class="block w-full p-2 text-lg rounded bg-white text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'?'border border-red-600 bg-red-100' : 'border-gray-500'" type="password" x-model="password" placeholder="Password">
            </div>
                
            {{-- ----------- (password salah) ------------- --}}
            <template x-if="errarea == 'password'">
                <span class="text-red-600" x-text="errmsg"></span>
            </template>
            
            {{-- ----------- (akun invalid) ------------- --}}
            <template x-if="errarea == 'invalid'">
                <span class="text-red-600" x-text="errmsg"></span>
            </template>

            <div class="text-right text-slate-700 hover:text-blue-600 underline py-2 font-Lato font-semibold">
                <a href="/forgotpassword">Forgot your password?</a>
            </div>

            <div class="px-2 pb-2 pt-4">
                
                <div class="flex justify-center px-4 pb-2 pt-4">
                    <button type="submit" @click="submit()" class="text-center border-red-500 border block w-1/2 px-4 py-2 text-lg rounded-lg  bg-red-500 text-white font-bold font-Lato hover:bg-white hover:text-red-500 hover:font-bold focus:outline-none hover:border-red-500 hover:border" >Submit</button>
                </div>
            
                <div class="text-center text-slate-700 py-2 font-bold font-Lato">
                    <p>Not a member ? <a href="registrasi" class="text-blue-500  hover:underline font-Lato ">Register here</a></p>
                </div>
            
            </div>

        </div>
    </div>
</section>