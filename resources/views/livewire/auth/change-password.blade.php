<div >
    {{-- Do your work, then step back. --}}
    <form action="#" method="POST">
        @csrf
        <div class="bg-white  flex flex-col gap-5 px-10 pb-5 ">
            <div>
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <h1 class="font-bold flex justify-center ">Change your password</h1>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[10px]">Password</h2>
                <input type="password" name="password" id="password" placeholder="masukan password baru anda" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[10px]">Konfirmasi Password</h2>
                <input type="password" name="password" id="password" placeholder="konfirmasi password" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
            </div>
            <h2 class="text-[10px] ">Pastikan password sesuai requirement, sedikitnya terdapat 8 karakter</h2>
            <a href="/login" class="text-center border-blue-500 border  block w-full p-2  text-lg rounded-lg  bg-blue-600 font-semibold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border ">Change Password</a>
        </div>
        
    </form>
</div>
