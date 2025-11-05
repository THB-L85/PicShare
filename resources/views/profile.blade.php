@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    {{-- @section('title_content')
        User's profile
    @endsection --}}

    <div class="flex flex-col items-center container mx-auto md:px-72">
        <div class="mb-4"><img src="" alt="img_profile" width="239" height="239" class="bg-white rounded-full w-auto h-28"></div>
        <div class="flex flex-col items-center gap-1 text-center px-4">
            <h1 class="text-xl">user_name <a href="#"><i class="fa-solid fa-user-pen fa-xs"></i></a></h1>
            <div class="flex flex-row gap-4 text-sm">
                <p> 0 Post </p>
                <p> 0 Followers </p>
                <p> 0 Following </p>
            </div>
            <p class="text-base"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil corrupti ea incidunt quis similique quod velit ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="grid grid-cols-3 md:grid-cols-4 gap-0.5 mt-8 px-4">
           @for ($i = 0; $i < 6; $i++)
             <div class="bg-black w-full">
                 <a href="{{ URL::to('/post-details') }}">
                     <img src="{{ URL::to('/images/brett-jordan-Bnld-GhojV8-unsplash.jpg') }}" alt="img_profile" height="460" class="w-full md:h-80 hover:opacity-90">
                     <div class="hidden">Information</div>
                 </a>
             </div>
           @endfor
        </div>
    </div>
@endsection