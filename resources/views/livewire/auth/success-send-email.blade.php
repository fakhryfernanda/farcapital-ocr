<div>
    {{-- The whole world belongs to you. --}}
    <form action="#" method="POST">
        @csrf
        <div class=" bg-white w-full px-10 pb-10 flex flex-col gap-10 ">
            <div class="flex flex-col">
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <h1 class="font-bold flex justify-center ">Reset your password</h1>
                
                    <p class="text-md text-center">Link ganti password sudah terkirim ke email anda, silahkan periksa email anda</p>
            </div>
          
            <a href="{{route('login')}}" type="button" class="text-center border-[rgb(101,13,29)] border  block w-full px-4 py-1 text-lg rounded-lg  bg-[rgb(112,13,29)] text-white font-semibold hover:bg-white hover:text-[rgb(112,13,29)] hover:font-bold focus:outline-none hover:border-[rgb(112,13,29)] hover:border">Kembali ke login</a>
        </div>
        
    </form>
</div>
