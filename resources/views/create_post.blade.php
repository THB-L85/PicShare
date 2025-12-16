@extends('layouts.app')
@section('title')
    New Post
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('content')
    <div class="flex flex-col items-center px-2">
        <div class="w-full md:w-2/5 bg-white flex items-center p-3 mb-5 rounded-lg ">
            <a href="{{ url()->previous() }}" class="text-black hover:text-black">
            <i class="fas fa-arrow-left fa-md"></i>
            </a>
            <div class="flex-grow text-center text-lg">New post</div>
        </div>
        <div class="w-2/5 shadow-md">
            <form method="POST" action="{{ route('images.store',Auth::user()->username) }}" id="dropzone" class="flex justify-center dropzone border border-dashed w-full h-50 p-2" enctype="multipart/form-data">
                @csrf
            </form>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col text-sm bg-white p-5 rounded-lg w-full">
                @csrf
                <input type="text" name="image" id="image" hidden value="{{ old('image') }}">
                <input type="text" name="title" id="title" class="mt-2 p-2 border rounded-lg @error('title') border-red-500 @enderror" placeholder="Write a title" value="{{ old('title') }}">
                @error('title')
                    <label for="title" class="text-red-500 rounded-lg p-2"> {{ $message }}</label>
                @enderror
                <textarea name="description" id="description" rows="2" class="mt-2 p-2 border rounded-lg @error('description') border-red-500 @enderror" placeholder="Write a description...">{{ old('description') }}</textarea>
                @error('description')
                    <label for="description" class="text-red-500 rounded-lg p-2"> {{ $message }}</label>
                @enderror
                @error('image')
                    <label for="image" class="text-red-500 rounded-lg p-2"> {{ $message }}</label>
                @enderror
                <button type="submit" class="bg-blue-500 text-white mt-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Share</button>
            </form>
        </div>
    </div>
@endsection