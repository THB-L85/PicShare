<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('camera-heart.svg') }}" type="image/ico">
    @stack('styles')
    <script src="https://kit.fontawesome.com/5a4a61aa48.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title> PicShare - @yield('title') </title>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="fixed w-full top-0 bg-white p-3 border-b shadow">
        <div class="flex mx-5 justify-between items-center uppercase">
            <h1 class="text-2xl font-bold"><a href="{{ URL::to('/') }}">PicShare</a></h1>
            @auth
                <nav class="flex gap-3 items-center">
                    <a href="{{ route('posts.index') }}" title="Create New Post" class="flex w-auto pr-2 h-9 bg-[#F3F3F3] rounded-lg justify-start items-center text-sm"><i class="fa-solid fa-plus fa-lg mx-2"></i> Create </a>
                    <a href="{{ URL::to('/') }}" title="Home"> <i class="fa-solid fa-house fa-lg"></i> </a>
                    <a href="{{ route('profile.index', Auth::user()->username) }}" title="Profile"><i class="fa-solid fa-user fa-lg"></i></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" title="Logout"><i class="fa-solid fa-right-from-bracket fa-lg pl-4"></i></button>
                    </form>
                </nav>
            @endauth
        </div>
    </header>
    <main class="flex-grow container mx-auto my-10">
        {{-- @auth --}}
            <h2 class="text-center text-2xl mb-10">@yield('title_content')</h2>
        {{-- @endauth --}}
        @yield('content')
    </main>
    <footer class="bg-white w-full p-5 text-center text-xs uppercase">
        PicShare - All rights reserverd {{ now()->year }}
    </footer>
</body>
</html>