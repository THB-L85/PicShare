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
        <div class="flex flex-col px-5 py-3 bg-white w-full rounded-b-xl">
            <div class="">
                <div><strong>@user</strong></div>
                <div>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolores, aliquam eaque voluptatibus nesciunt totam tenetur laboriosam quidem sequi recusandae quia vel fuga corrupti consectetur quos, perspiciatis neque explicabo minima.</div>
            </div>
            <div class="flex flex-row w-full items-center">
                <div class="w-full">
                    <input type="text" class="w-full bg-[#E9E9E9]">
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 60 60" fill="none">
                        <path d="M30.0251 15.0025C16.2501 2.49999 2.50013 20 14.4551 32.5025L30.0276 50L45.6026 32.5C57.5001 20 43.7501 2.49749 30.0251 15.0025Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection