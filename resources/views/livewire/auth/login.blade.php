<section class="min-h-1/2 flex text-white " x-data="userLogin" >

    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>
        
    <div x-init="notlogin()"></div>
    
    <div x-show="!isloading" class="md:w-[500px] px-12 bg-white  rounded-xl shadow-lg shadow-gray-600/50 flex items-center justify-center text-center">

        <div class="w-full py-6 z-20">

            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>

            {{-- Memeriksa apakah terdapat flash data --}}
            <div x-init="flashdata()"></div>

            {{-- Menampilkan flash data --}}
            <div x-show="flash">
                <div  x-data="{flashdt : true}" :class="{'block' : flashdt, hidden : !flashdt}" x-init="setTimeout(() => flashdt = false, 10000)">
                    <p class="text-green-600 text-lg" x-text="message"></p>
                </div>
            </div>
            
                {{-- ----------- (akun invalid) ------------- --}}
                <template x-if="errarea == 'invalid'">
                    <div>
                        <span class="text-red-600 italic" x-text="errmsg+', silahkan cek email anda atau '"></span>
                        <p class="text-redprimary font-bold"><a href="/emailvalidation">kirim ulang email aktivasi akun</a></p>
                    </div>
                </template>
            {{-- Email --}}
            <div class="pb-2 pt-4 text-white flex">
                <div class="text-2xl p-2 rounded mx-1 border border-1" x-bind:class="errarea == 'email' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div> 

                <input  @click="errarea = ''" @keydown.enter="submit" type="email" x-model="email" placeholder="Email"  class="block w-full p-2 text-lg rounded text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'email'?'border border-red-600' : 'border-gray-600 bg-white'">
            </div>

            {{-- Pesan Error Email --}}
            <template x-if="errarea == 'email'">
                <span class="text-red-600" x-text="errmsg"></span>
            </template>
            
            <div class="pb-2 pt-4 flex text-white">
                <div class="text-2xl p-2 rounded mx-1 border border-1" x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                    <i class="fa-solid fa-key"></i>  
                </div> 
                <input @click="errarea = ''" @keydown.enter="submit"  class="block w-full p-2 text-lg rounded bg-white text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'?'border border-red-600' : 'border-gray-600'" type="password" x-model="password" placeholder="Password">
            </div>
            
            {{-- ----------- (password salah) ------------- --}}
            <template x-if="errarea == 'password'">
                <span class="text-red-600" x-text="errmsg"></span>
            </template>
            
            <div class="text-right text-slate-700 hover:text-redsecondary underline py-2 font-Lato font-semibold">
                <a href="/forgotpassword">Forgot your password?</a>
            </div>

            <div class="px-2 pb-2 pt-4">
                <input type="submit" @click="submit()" class="btn-primary mb-4" value="Login">
                <div class="text-center text-slate-700 py-2 font-bold font-Lato">
                    <p>Not a member ? <a href="registrasi" class ="text-redprimary  hover:text-redsecondary hover:shadow-sm font-Lato ">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>