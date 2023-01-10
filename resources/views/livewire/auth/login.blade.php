<section class="min-h-1/2 flex text-white ">
    <div class="lg:w-[600px] w-full rounded shadow-lg shadow-gray-600/50 flex items-center justify-center text-center md:px-16 px-0 z-0 bg-white">
        <div class="absolute lg:hidden z-10 inset-0 bg-gray-50 bg-no-repeat bg-cover items-center">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        </div>
        <div class="w-full py-6 z-20">
            
            <div class="py-1 space-x-2 flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>

            {{-- Pesan registrasi berhasil --}}
            @if($message = Session::get('success'))
                <p class="text-green-500 text-sm font-bold">{{ $message }}</p>
                <p class="text-green-500 text-sm font-bold">Silakan login</p>
            @endif
            
            {{-- ---------------(batas suci)------------ --}}
            <form action="{{ route('authenticate') }}" method="POST" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">                    
                @csrf
                <div class="pb-2 pt-4 text-gray-500 flex">
                    <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                        <i class="fa-sharp fa-solid fa-envelope"></i>   
                    </div> 
                    <input type="email" name="email" id="email" placeholder="Email" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
                </div>

                {{-- ----------- ( batas suci) ------------- --}}
                @if ($message = Session::get('erroremail'))
                <span class=" text-red-600 font-bold">{{$message}}</span>
                @endif

                <div class="pb-2 pt-4 flex text-gray-500">
                    <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                        <i class="fa-solid fa-key"></i>  
                    </div> 
                    <input class="block w-full p-2 text-lg rounded bg-gray-200 text-black" type="password" name="password" id="password" placeholder="Password" >
                </div>
                
                {{-- ----------- ( batas suci) ------------- --}}
                @if ($message = Session::get('errorpassword'))
                    <span class=" text-red-600 font-bold">{{$message}}</span>
                @endif

                <div class="text-right text-slate-700 hover:underline hover:text-blue-500 underline py-2">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="px-4 pb-2 pt-4">
                    <button class="border-blue-500 border uppercase block w-full px-4 py-2 text-lg rounded-lg  bg-blue-600 font-bold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border">sign in</button>
                </div>

                
                <div class="text-center text-slate-700 py-2">
                    <p>Not a member ? <a href="registrasi" class ="text-blue-500  hover:underline">Register here</a></p>
                </div>
            </form>

        </div>
    </div>
</section>