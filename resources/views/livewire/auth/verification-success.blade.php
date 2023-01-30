<div x-data="successvalidation" x-init="cektoken()">
    
    {{-- loading screen --}}
    <div x-show="isloading">
        @livewire('loadingscreen')
    </div>

    <div x-init="notlogin()"></div>
    <input type="hidden" id="token" value="{{$token}}">
    <div x-show="!isloading" class="bg-white md:w-[500px] px-12 pb-10 flex flex-col gap-10 rounded-xl shadow-lg shadow-gray-600/50">
        <div class="flex flex-col">
            <div class=" flex justify-center">
                <img src="{{ asset('assets/download.png')}}"> 
            </div>
            <h1 class="font-bold text-xl flex justify-center font-Lato py-4">Terimakasih</h1>
            <p class="text-md text-center font-Lato font-normal">Akun <b x-text="email"></b> sudah bisa digunakan. silahkan login</p>
        </div>
        <div class="flex justify-center">
            <a href="{{route('login')}}" type="button" class="btn-primary w-1/2">Log In</a>
        </div>
    </div>
</div>
