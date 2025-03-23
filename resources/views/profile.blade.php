@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    {{-- @section('title_content')
        User's profile
    @endsection --}}

    <div class="flex flex-col items-center">
        <div class="mb-4"><img src="" alt="img_profile" width="239" height="239" class="bg-white rounded-full w-auto h-28"></div>
        <div class="flex flex-col items-center gap-1 text-center">
            <h1 class="text-xl">user_name</h1>
            <div class="flex flex-row gap-4 text-sm">
                <p> 0 Post </p>
                <p> 0 Followers </p>
                <p> 0 Following </p>
            </div>
            <p class="text-base px-14"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil corrupti ea incidunt quis similique quod velit ex. </p>
        </div>
        <div class="grid grid-cols-2  gap-1 mt-8 px-4">
            <div class="bg-slate-600 w-full h-64">
                <img src="{{ URL::to('/images/brett-jordan-Bnld-GhojV8-unsplash.jpg') }}" alt="img_profile" height="460" class="w-full h-64">
                <div class="hidden">Information</div>
            </div>
            <div class="bg-slate-600 w-full h-64">
                <img src="{{ URL::to('/images/main-picshare.jpg') }}" alt="img_profile" height="460" class="w-full h-64">
            </div>
            <div class="bg-slate-600 w-full h-64">
                <img src="{{ URL::to('/images/main-picshare.jpg') }}" alt="img_profile" height="460" class="w-full h-64">
            </div>
            <div class="bg-slate-600 w-full h-64">
                <img src="{{ URL::to('/images/brett-jordan-Bnld-GhojV8-unsplash.jpg') }}" alt="img_profile" height="460" class="w-full h-64">
                <div class="hidden">Information</div>
            </div>
        </div>
    </div>
@endsection