<nav class=" relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-200 text-black hover:text-gray-700 focus:text-gray-700 navbar navbar-expand-lg navbar-light">
    <div class="container w-full flex flex-wrap  justify-between items-center  px-6">
    <!-- Left links -->
        <a href="/" class=" flex flex-wrap pl-0 mr-auto relative cursor-pointer">
                <img class=" h-20" src="{{ asset('assets/farcapital.png')}}" alt="">  
        </a>
        <!-- Left links -->
            <!-- Right elements -->
            <div class="flex flex-wrap items-center gap-5 relative">
            <div class="flex items-center relative gap-5">
                <!-- Icon -->
                    {{-- Belum login --}}
                    @if (session('token') == null)
                    <a href="/login" class="text-white inline-block   mt-1 px-7 py-2 bg-gray-500 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" >
                        Login
                    </a>
                    <a href="/registrasi" class="text-white inline-block   mt-1 px-7 py-2 bg-red-400 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" >
                        Register
                    </a>
                    {{-- Sudah login --}}
                    @else
                    <a href="/logout" class="text-white inline-block   mt-1 px-7 py-2 bg-gray-500 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" >
                        Logout
                    </a>
                    @endif
            </div>
            <div class="relative">
                @if (session('token')!=null)
                <a class=" flex items-center hidden-arrow" href="/profile" id="dropdownMenuButton2" role="button">
                    <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full"
                    style="height: 35px; width: 35px" alt="" loading="lazy" />
                </a>
                @endif
            </div>
            </div>
        
        <!-- Right elements -->
    </div>
</nav>