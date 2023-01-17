<div x-data="changeforgetpassword" x-init="cektoken()">
    <input type="hidden" value="{{$token}}" id="token">

    <template x-if="!isloading">
        <div class="bg-white  flex flex-col gap-5 px-10 pb-5 ">
            <div>
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <h1 class="font-bold flex justify-center ">Change your password</h1>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[10px]">Password</h2>
                <input type="password" x-model="password" placeholder="masukan password baru anda" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-[10px]">Konfirmasi Password</h2>
                <input type="password" x-model="confirmpassword" placeholder="konfirmasi password" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
            </div>
            <p class="text-red-600 text-center" x-text="errmsg"></p>
            <h2 class="text-[10px] ">Pastikan password sesuai requirement, sedikitnya terdapat 8 karakter</h2>
            <button  @click="submitchangepass()" class="text-center border-[rgb(101,13,29)] border  block w-full px-4 py-1 text-lg rounded-lg  bg-[rgb(112,13,29)] text-white font-semibold hover:bg-white hover:text-[rgb(112,13,29)] hover:font-bold focus:outline-none hover:border-[rgb(112,13,29)] hover:border">Change Password</button>
        </div>
    </template>
</div>
