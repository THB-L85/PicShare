<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title> PicShare - @yield('title') </title>
</head>
<body class=" bg-gray-100">
    <header class="bg-white p-3 border-b shadow">
        <div class="container mx-auto flex justify-between items-center uppercase">
            <h1 class="text-2xl font-bold">PicShare</h1>
            {{-- @auth --}}
                <nav class="flex gap-2 items-center">
                    <a href="">New</a>
                    <a href="">Home</a>
                    <a href="">Profile</a>
                </nav>
            {{-- @endauth --}}
        </div>
    </header>
    <main class="container mx-auto mt-10">
        @auth
            <h2 class="text-center text-3xl mb-10">@yield('title')</h2>
        @endauth
        @yield('content')
    </main>
    <footer class="fixed inset-x-0 bottom-0  bg-white p-5 text-center text-xs uppercase">
        PicShare - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>