<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://kit.fontawesome.com/e0f8177fe6.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{asset('/js/post.js')}}"></script>
    <script src="{{asset('/js/imageViewer.js')}}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    @livewireStyles
</head>
<body x-data="auth" class="min-h-screen bg-gradient-to-b from-red-50 to-red-300">
    <div x-init="ceklogin()"></div>
    {{-- <template x-if="isloading == false"> --}}
    <div>
        @livewire('navbar.user')
        <template x-if="!isloading">
            <div class="flex justify-center mt-4">
                {{$slot}}
            </div>
        </template>
        @livewireScripts
    </div>
    {{-- </template> --}}
</body>
</html>