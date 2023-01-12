<div >
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    <form action="#" method="POST">
        @csrf
        <div class="bg-white w-full px-10 pb-10 flex flex-col gap-10 ">
            <div>
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <h1 class="font-bold flex justify-center ">Reset your password</h1>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[10px]">Masukan email anda dan kami akan mengirimkan link forgot password</h2>
                <input type="email" name="email" id="email" placeholder="masukan alamat email anda" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
            </div>
            <a href="/successsendemail" class="text-center border-blue-500 border  block w-full px-4 py-2 text-lg rounded-lg  bg-blue-600 font-semibold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border">Submit</a>
        </div>
        
    </form>
</div>
