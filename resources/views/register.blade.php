@extends('layouts.app')
@section('title')
    Register
@endsection
@section('content')
    <div class="flex flex-col bg-white m-auto rounded-2xl w-3/4 lg:flex-row lg:w-3/4 xl:w-2/4">
        <img src="{{ asset('images/brett-jordan-Bnld-GhojV8-unsplash.jpg') }}" alt="main-image" width="500" height="665"
            class="hidden lg:flex lg:w-1/2 rounded-l-2xl">
        <form action="{{ URL::to('/save-register') }}" method="POST" novalidate
            class="flex flex-col w-full text-center px-4 py-10 lg:w-1/2">
            @csrf
            <span class="mb-4 text-2xl">Create account</span>

            <input type="text" id="name" name="name" placeholder="Name"
                class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]" value="{{ old('name') }}">
                @error('name')
                    <p class=" bg-red-500 text-white mx-4">{{ $message }}</p>
                @enderror
            <input type="text" id="username" name="username" placeholder="Username"
                class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]" value="{{ old('username') }}">
                @error('username')
                    <p class=" bg-red-500 text-white mx-4">{{ $message }}</p>
                @enderror
            <input type="email" id="email" name="email" placeholder="Email" class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]"value="{{ old('email') }}">
                @error('email')
                    <p class=" bg-red-500 text-white mx-4">{{ $message }}</p>
                @enderror
            <input type="password" id="password" name="password" placeholder="Password"
                class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]" value="{{ old('password') }}">
                @error('password')
                    <p class=" bg-red-500 text-white mx-4">{{ $message }}</p>
                @enderror
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                class="h-10 px-4 mx-4 my-2 bg-[#F2F2F2]" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <p class=" bg-red-500 text-white mx-4">{{ $message }}</p>
                @enderror

            <button type="submit" class="h-10 mx-4 my-2 bg-[#B5B5B5]"> Create </button>

            <hr class="border-t-1 border-black mx-4 my-4">
            <span> Already have an account? <a href="{{ URL::to('/login') }}">Log in</a></span>
        </form>
    </div>
@endsection
