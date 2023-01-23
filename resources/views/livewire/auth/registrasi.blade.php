<section class="min-h-1/2 flex text-white mb-4"x-data="userRegister">
    <form action="#">
     <div x-show="isloading">
        <div>
            @livewire('loadingscreen')
        </div>
    </div>

    <div x-init="notlogin()"></div>
    <div class="lg:w-[500px] w-full rounded-lg shadow-lg shadow-gray-600/50 flex items-center justify-center text-center md:px-16 px-0 z-0 bg-white">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-50 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>
        <div class="w-full py-6 z-20">
            
            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
               
                <div class="pb-2 pt-4 text-white flex">
                    <div class="text-2xl p-2  rounded mx-1 border border-1 "
                    x-bind:class="errarea == 'email' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'">
                        <i class="fa-sharp fa-solid fa-envelope"></i>   
                    </div> 
                    <input type="email" x-model="email" placeholder="Email" class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'email'? 'border border-red-600' : 'border-gray-600 bg-white' ">
                </div>
                
                <template x-if="errarea == 'email'">
                    <p class="text-red-600 text-center" x-text="errmsg"></p>
                </template>

                <div class="pb-2 pt-4 flex text-white">
                    <div class="text-2xl p-2  rounded mx-1 border border-1 "
                        x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'" >
                        <i class="fa-solid fa-key"></i>  
                    </div> 
                    <input class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'? 'border border-red-400' : 'border-gray-600 bg-white'" type="password" x-model="password" placeholder="Password" >
                </div>
                <template x-if="errarea == 'password'">
                    <p class="text-red-600 text-center font-Lato font-bold" x-text="errmsg"></p>
                </template>
                <div class="pb-2 pt-4 flex text-white">
                    <div class="text-2xl p-2  rounded mx-1 border border-1 "
                        x-bind:class="errarea == 'password' ? 'bg-red-500 border-red-400' : 'bg-gray-600 border-gray-400'" >
                        <i class="fa-solid fa-key"></i>  
                    </div> 
                    <input class="block w-full p-2 text-lg rounded  text-black font-Lato font-bold border-2 " x-bind:class="errarea == 'password'? 'border border-red-400' : 'border-gray-600 bg-white'" type="password" x-model="confirmpassword" placeholder="Konfirmasi Password" >
                </div>
                <div class="px-4 pb-2 pt-4 my-4 flex justify-center">
                    <button @click="submit" class="btn-primary w-1/2">Register</button>
                </div>

                <div class="text-center text-slate-700 py-2 font-Lato font-semibold">
                    <p>Already Have Account ? <a href="/login" class ="text-blue-500  hover:underline">Sign In</a></p>
                </div>

        </div>
    </div>
    </form>
</section>

