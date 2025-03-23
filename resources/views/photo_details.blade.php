@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    {{-- @section('title_content')
        User's profile
    @endsection --}}

    <div class="flex flex-col items-center px-2">
        <div class="">
            <img src="/images/brett-jordan-Bnld-GhojV8-unsplash.jpg" alt="details" class="h-[545px]">
        </div>
        <div class="bg-slate-300 w-full">
            <span>Details</span>
        </div>
    </div>
@endsection