@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <div class="containter">
        <div class="flex flex-col bg-white mx-9 rounded-2xl">
            <img src="/images/main-picshare.jpg" alt="main-image" width="500" height="665" class="hidden">
            <form action="" class="flex flex-col w-full text-center px-4 py-10">
                <span class="mb-4 text-2xl">Hello, again!</span>
                <input type="text" placeholder="Email" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]">
                <input type="text" placeholder="Password" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]">
                <button class="h-10 mx-4 my-2 bg-[#B5B5B5]"> Log in</button>
                <hr class="border-t-1 border-black mx-4 my-4">
                <span> Dont't have an account? <a href="#">Sign up</a></span>
            </form>
        </div>
    </div>
@endsection