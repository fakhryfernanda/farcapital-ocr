<div x-data="successvalidation" x-init="cektoken()" class="min-h-1/2">
    <div class=" bg-white lg:w-[500px] w-full rounded-xl shadow-lg shadow-gray-600/50  flex flex-col items-center text-center md:px-16 px-0 pt-7 pb-8 z-0">
        <div class="flex flex-col">
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            <h1 class="font-bold flex justify-center ">Email verification status</h1>
            
                <p class="text-center py-3">Your email was verified
                </p>
        </div>
        <input type="hidden" id="token" value="{{$token}}">
        <a href="{{route('login')}}" type="button" class=" text-center border-red-800 border  block  p-2 text- rounded-lg  bg-red-900 font-semibold hover:bg-red-800 text-white focus:outline-none hover:border-red-900 hover:border w-[150px]">Back to Login</a>
    </div>

</div>
