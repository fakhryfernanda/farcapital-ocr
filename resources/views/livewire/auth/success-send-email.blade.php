<div>
    <div x-init="notlogin()"></div>
    <div class=" bg-white w-full px-10 pb-10 flex flex-col gap-10 rounded-xl shadow-lg shadow-gray-600/50">
        <div class="flex flex-col">
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            <h1 class="font-bold text-xl flex justify-center font-Lato py-4">Reset Your Password</h1>
            
                <p class="text-md text-center font-Lato font-normal">Link ganti password sudah terkirim ke email anda</p>
                <p class="text-md text-center font-Lato font-normal">Silahkan periksa email anda</p>
        </div>
        <div class="flex justify-center">

            <a href="{{route('login')}}" type="button" class="text-center border-red-400 border  block w-1/2 font-Lato px-4 py-1 text-lg rounded-lg  bg-red-500 text-white font-semibold hover:bg-white hover:text-red-500 hover:font-bold focus:outline-none hover:border-red-400 hover:border">Log In</a>
        </div>
    </div>
</div>
