@extends('layouts.app')
@section('title')
    New Post
@endsection
@section('content')
    <div class="flex flex-col items-center px-2">
        <div class="w-full md:w-2/5 bg-white flex items-center p-3 mb-5 rounded-lg">
            <a href="{{ url()->previous() }}" class="text-black hover:text-black">
            <i class="fas fa-arrow-left fa-md"></i>
            </a>
            <div class="flex-grow text-center text-lg">New post</div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col bg-white p-5 rounded-lg w-full md:w-2/5">
            @csrf
            <img src="{{ asset('images/brett-jordan-Bnld-GhojV8-unsplash.jpg') }}" alt="img_preview" id="img_preview" class="mb-4 w-full h-auto max-h-dvh object-contain bg-gray-200">
            <textarea name="description" id="description" rows="2" class="mb-4 p-2 border rounded-lg" placeholder="Write a description..."></textarea>
            <button type="submit" class="bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300">Share</button>
        </form>
    </div>
@endsection