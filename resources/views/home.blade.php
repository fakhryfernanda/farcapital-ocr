<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite('resources/css/app.css')
</head>
<body class="h-screen overflow-hidden flex items-center justify-center background: bg-gradient-to-b from-red-50 to-red-300" style="">

    <div class="bg-white shadow-md p-4">
        <h1 class="text-4xl font-bold">Homepage</h1>
    </div>

    {{-- <section class="min-h-1/2 flex text-white ">
        <div class="lg:w-[600px] w-full rounded shadow-lg shadow-gray-600/50 flex items-center justify-center text-center md:px-16 px-0 z-0 bg-white">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-50 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                
                <div class="py-1 space-x-2 flex justify-center">
                    <img src="{{ asset('assets/download.png')}}"> 
                </div>
                
                <form action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">                    
                    <div class="pb-2 pt-4 text-gray-500 flex">
                        <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                           <i class="fa-sharp fa-solid fa-envelope"></i>   
                        </div> 
                        <input type="email" name="email" id="email" placeholder="Email" class="block w-full p-2 text-lg rounded bg-gray-200 text-black">
                    </div>
                    <div class="pb-2 pt-4 flex text-gray-500">
                         <div class="text-2xl p-2 bg-gray-300 rounded mx-1">
                           <i class="fa-solid fa-key"></i>  
                        </div> 
                        <input class="block w-full p-2 text-lg rounded bg-gray-200 text-black" type="password" name="password" id="password" placeholder="Password" >
                    </div>
                    <div class="text-right text-slate-700 hover:underline hover:text-blue-500 underline py-2">
                        <a href="#">Forgot your password?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button class="border-blue-500 border uppercase block w-full px-4 py-2 text-lg rounded-lg  bg-blue-600 font-bold hover:bg-white hover:text-blue-500 hover:font-bold focus:outline-none hover:border-blue-500 hover:border">sign in</button>
                    </div>

                    <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4 mt-16 lg:hidden ">
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                    <div class="text-center text-slate-700 py-2">
                        <p>Not a member ? <a href="/register" class ="text-blue-500  hover:underline">Register here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section> --}}

</body>
</html>













