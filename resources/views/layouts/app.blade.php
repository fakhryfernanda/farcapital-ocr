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
    <script src="{{asset('/js/dashboard.js')}}"></script>
    <script src="{{asset('/js/dashboard_.js')}}"></script>
    {{-- <script src="{{asset('/dashboard')}}"></script> --}}
    <title>Document</title>
    @livewireStyles
</head>
<body>
    @livewire('navbar.user')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-red-50 to-red-300">
        {{$slot}}
    </div>
    @livewireScripts
</body>
</html>