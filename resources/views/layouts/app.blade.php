<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('camera-heart.svg') }}" type="image/ico">
    @vite('resources/css/app.css')
    <title> PicShare - @yield('title') </title>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="fixed w-full top-0 bg-white p-3 border-b shadow">
        <div class="flex mx-5 justify-between items-center uppercase">
            <h1 class="text-2xl font-bold"><a href="{{ URL::to('/') }}">PicShare</a></h1>
            {{-- @auth --}}
                <nav class="flex gap-2 items-center">
                    <a href="#" class="flex w-24 h-9 bg-[#F3F3F3] rounded-lg justify-start items-center text-base"><img src="{{ asset('images/upload.svg') }}" alt="icon_upload" class="pt-0.5 mx-2" height="25" width="25"> New </a>
                    <a href="{{ URL::to('/') }}"> <img src="{{ asset('images/home.svg') }}" alt="icon_home" height="30" width="30"> </a>
                    <a href="{{ URL::to('/profile') }}"> <img src="{{ asset('images/profile.svg') }}" alt="icon_profile" height="30" width="30"> </a>
                </nav>
            {{-- @endauth --}}
        </div>
    </header>
    <main class="flex-grow container mx-auto my-10">
        {{-- @auth --}}
            <h2 class="text-center text-2xl mb-10">@yield('title_content')</h2>
        {{-- @endauth --}}
        @yield('content')
    </main>
    <footer class="bg-white w-full p-5 text-center text-xs uppercase">
        PicShare - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>