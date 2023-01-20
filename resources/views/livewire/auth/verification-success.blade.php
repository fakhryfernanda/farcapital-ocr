<div>
    {{-- Success is as dangerous as failure. --}}
    <form action="#" method="POST">
        @csrf
        <div class=" bg-white w-full px-10 pb-10 flex flex-col gap-10 ">
            <div class="flex flex-col">
                <div class=" flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                <h1 class="font-bold flex justify-center ">Email verification status</h1>
                
                    <p class="text-[10px] text-center">Your email was verified
                    </p>
            </div>
          
            <a href="{{route('login')}}" type="button" class=" text-center border-blue-500 border  block  p-2 text-sm rounded-lg  bg-blue-600 font-semibold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border w-full">Kembali ke login</a>
        </div>
        
    </form>
</div>
