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
    <header class="bg-white p-5 border-b shadow">
        <div class="container mx-auto flex justify-between items-center uppercase">
            <h1 class="text-3xl font-bold">PicShare</h1>
            <nav class="flex gap-2 items-center">
                <a href="">Log In |</a>
                <a href="">Sign Up</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="text-center text-3xl mb-10">@yield('title')</h2>
        @yield('content')
    </main>
    <footer class="text-center p-5 uppercase ">
        PicShare - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>