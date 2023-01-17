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


        {{-- Loading Spinner --}}
        <div>
         <div class="flex items-center justify-center space-x-2 animate-bounce">
            <div class="w-8 h-8 bg-red-500 rounded-full"></div>
            <div class="w-8 h-8 bg-red-300 rounded-full"></div>
            <div class="w-8 h-8 bg-red-500 rounded-full"></div>
        </div>
         <div>
            <div class="py-5">
            <h2 class="text-center text-slate-400 text-xl font-semibold animate-pulse">Loading...</h2>
            </div>
         </div>
        </div>

      

                {{-- Login gagal --}}
                @if($message = Session::get('loginError'))
                    <p class="text-red-500 text-sm font-bold">{{ $message }}</p>
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
                    <a href="/forgotpassword">Forgot your password?</a>
                </div>
                <div class="px-2 pb-2 pt-4">
                    <button class="border-blue-500 border uppercase block w-full px-4 py-2 text-lg rounded-lg  bg-blue-600 font-bold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border">
                            <svg wire:loading aria-hidden="true" class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        sign in
                    </button>
                </div>

                
                <div class="text-center text-slate-700 py-2">
                    <p>Not a member ? <a href="registrasi" class ="text-blue-500  hover:underline">Register here</a></p>
                </div>
            </form>

         


        </div>
    </div>
</section>