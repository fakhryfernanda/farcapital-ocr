<nav class="z-20 relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-200 text-black hover:text-gray-700 focus:text-gray-700 navbar navbar-expand-lg navbar-light">
    <div class="container w-full flex flex-wrap  justify-between items-center  px-6">
        <a href="/" class=" flex flex-wrap pl-0 mr-auto relative cursor-pointer">
            <img class=" h-20" src="{{ asset('assets/farcapital.png')}}" alt="">  
        </a>
        <div class="flex flex-wrap items-center gap-5 relative">
            <div class="flex items-center relative gap-5">
                <template x-if="isloading == false">
                    <div>
                        {{-- Belum login --}}
                        <div x-show="!islogin">
                            <a href="/login" class="text-white inline-block   mt-1 px-7 py-2 bg-grayprimary font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-500 hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out" >
                                Login
                            </a>
                            <a href="/registrasi" class="text-white inline-block   mt-1 px-7 py-2 bg-redprimary font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-redsecondary hover:shadow-lg transition duration-150 ease-in-out" >
                                Register
                            </a>
                        </div>
                        <a href="/profile" x-show="hasprofile" class="text-white inline-block   mt-1 px-7 py-2 bg-redprimary font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-redsecondary hover:shadow-lg transition duration-150 ease-in-out" >
                            Profile
                        </a>

                        {{-- Sudah login --}}         
                        <button x-show="islogin" @click="logout()" class="text-white inline-block mt-1 px-7 py-2 bg-gray-500 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-600 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-600 active:shadow-lg transition duration-150 ease-in-out" >
                            Logout
                        </button>
                    </div>
                </template>
            </div>
        </div>
        
        <!-- Right elements -->
    </div>
</nav>