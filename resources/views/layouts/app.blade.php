<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e0f8177fe6.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
    @livewireStyles
</head>
<body>
    {{$slot}}
    @livewireScripts
</body>
</html>