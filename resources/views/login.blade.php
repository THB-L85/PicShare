@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="flex flex-col bg-white m-auto rounded-2xl w-3/4 lg:flex-row lg:w-3/4 xl:w-2/4">
        <img src="{{ asset('images/main-picshare.jpg') }}" alt="main-image" width="500" height="665" class="hidden lg:flex lg:w-1/2 rounded-l-2xl">
        <form action="" class="flex flex-col w-full text-center px-4 py-10 lg:w-1/2">
            <span class="mb-4 text-2xl">Hello, again!</span>
            <input type="text" placeholder="Email" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2] rounded-md">
            <input type="password" placeholder="Password" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2] rounded-md">
            <button class="h-10 mx-4 my-2 bg-[#B5B5B5] rounded-md"> Log in</button>
            <hr class="border-t-1 border-black mx-4 my-4">
            <span> Don't have an account? <a href="{{ URL::to('/register') }}">Sign up</a></span>
        </form>
    </div>
@endsection