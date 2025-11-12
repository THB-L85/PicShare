@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="flex flex-col bg-white m-auto rounded-2xl w-3/4 lg:flex-row lg:w-3/4 xl:w-2/4 lg:h-[530px]">
        <img loading="lazy" fetchpriority="high" src="{{ asset('images/main-picshare.jpg') }}" alt="main-image" width="500" height="665" class="hidden lg:flex lg:w-1/2 rounded-l-2xl">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col w-full text-center px-4 py-10 lg:w-1/2">
            @csrf
            <span class="mb-4 text-2xl">Hello, again!</span>
            <input id="email" name="email" type="email" placeholder="Email" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2] rounded-md @error('email') border border-red-500 @enderror">
            @error('email')
                <p class="rounded-md bg-red-500 text-white mx-4 p-2">{{ $message }}</p>
            @enderror
            <input id="password" name="password" type="password" placeholder="Password" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2] rounded-md">
            @error('password')
                <p class="rounded-md bg-red-500 text-white mx-4 p-2">{{ $message }}</p>
            @enderror
            <div class="flex justify-start mx-4 gap-2">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" class="text-gray-500">Remember me</label>
            </div>
            <button class="h-10 mx-4 my-2 bg-[#B5B5B5] rounded-md"> Log in</button>
            <hr class="border-t-1 border-black mx-4 my-4">
            <span> Don't have an account? <a href="{{ route('register') }}">Sign up</a></span>
        </form>
    </div>
@endsection