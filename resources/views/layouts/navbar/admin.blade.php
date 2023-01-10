<div>
    {{-- The whole world belongs to you. --}}
    <nav class=" relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-200 text-black hover:text-gray-700 focus:text-gray-700 navbar navbar-expand-lg navbar-light">
        <div class="container w-full flex flex-wrap  justify-between items-center  px-6">
        <!-- Left links -->
            <div class="navbar-nav flex flex-wrap pl-0 list-style-none mr-auto   relative gap-8">
                    <img class=" h-20" src="{{ asset('assets/farcapital.png')}}" alt="">  
                    <div class="flex items-center font-semibold text-white">
                        <a class="nav-link text-gray-600 hover:text-gray-700 focus:text-gray-700 p-0" href="#">Dashboard</a>
                    </div>
            </div>
            
            <!-- Left links -->
             <!-- Right elements -->
                <div class="flex flex-wrap items-center relative gap-5">
                    <!-- Icon -->
                        <a href="{{route('login')}}" class="text-white inline-block   mt-1 px-7 py-2 bg-gray-500  font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" >
                            Login
                        </a> 
                        <a href="{{route('logout')}}" class="text-white inline-block   mt-1 px-7 py-2 bg-gray-500  font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out" >
                            Logout
                        </a> 
                </div>
            <!-- Right elements -->
        </div>
    </nav>
</div>
