<section class="min-h-1/2 flex text-white mb-4"x-data="userRegister">
     <div x-show="isloading">
        <div>
            @livewire('loadingscreen')
        </div>
    </div>

    <div x-init="notlogin()"></div>
    
    <div class="md:w-[500px] rounded-lg shadow-lg shadow-gray-600/50 flex items-center justify-center w-full text-center px-12 z-0 bg-white">

        <div class="w-[100%] py-6 z-20">
            
            {{-- Logo Far Capital --}}
            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            
            {{-- Email --}}
            <div class="pb-2 pt-4 text-white flex">
                <div class="text-2xl p-2  rounded mx-1 border border-1 "
                x-bind:class="errarea == 'email' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                    <i class="fa-sharp fa-solid fa-envelope"></i>   
                </div> 
                <input @click="errarea = ''" @keydown.enter="submit" type="email" x-model="email" placeholder="Email" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'email'? 'border border-red-600' : 'border-gray-600 bg-white' ">
            </div>
            
            {{-- Pesan Error Email --}}
            <template x-if="errarea == 'email'">
                <p class="text-red-600 text-center" x-text="errmsg"></p>
            </template>

            {{-- Password --}}
            <div class="pb-2 pt-4 flex text-white">
                <div class="text-2xl p-2  rounded mx-1 border border-1 "
                    x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'" >
                    <i class="fa-solid fa-key"></i>  
                </div> 
                <input @click="errarea = ''" class="block w-full p-2 text-lg rounded text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'? 'border border-red-400' : 'border-gray-600 bg-white'" type="password" x-model="password" placeholder="Password" >
            </div>

            {{-- Konfirmasi Password --}}
            <div class="pb-2 pt-4 flex text-white">
                <div class="text-2xl p-2  rounded mx-1 border border-1" x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                    <i class="fa-solid fa-key"></i>  
                </div> 
                <input @click="errarea = ''" @keydown.enter="submit" class="block w-full p-2 text-lg rounded text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password' ? 'border border-red-400' : 'border-gray-600 bg-white'" type="password" x-model="confirmpassword" placeholder="Konfimasi Password" >
            </div>

            {{-- Pesan Error Password --}}
            <template x-if="errarea == 'password'">
                <p class="text-red-600 text-center font-Lato font-bold" x-text="errmsg"></p>
            </template>

            {{-- Tombol Register --}}
            <div class="px-4 pb-2 pt-4 my-4 flex justify-center">
                <button @click="submit" class="btn-primary">Register</button>
            </div>

            {{-- Tombol Sign In --}}
            <div class="text-center text-slate-700 py-2 font-Lato font-semibold">
                <p>Already Have Account ? <a href="/login" class ="text-redprimary  hover:text-redsecondary hover:underline">Sign In</a></p>
            </div>

        </div>
    </div>
</section>

