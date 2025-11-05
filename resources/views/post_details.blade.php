@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    {{-- @section('title_content')
        User's profile
    @endsection --}}

    <div class="flex flex-col items-center px-2">
        <div class="w-full md:w-2/5 bg-white flex items-center p-3 mb-5 rounded-lg">
            <a href="{{ url()->previous() }}" class="text-black hover:text-black">
            <i class="fas fa-arrow-left fa-md"></i>
            </a>
            <div class="flex-grow text-center text-lg">New post</div>
        </div>
        <div class="">
            <img src="/images/brett-jordan-Bnld-GhojV8-unsplash.jpg" alt="details" class="h-[545px]">
        </div>
        <div class="flex flex-col px-5 py-3 bg-white w-full rounded-b-xl">
            <div>
            <div><strong>@user</strong></div>
            <div>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolores, perspiciatis neque explicabo minima.</div>
            </div>
            <hr class="my-3">
            <div class="h-60 overflow-y-auto">
            @for ($i = 0; $i < 3; $i++) 
                <div class="flex ">
                <span>
                    <strong class="pr-1">@other_user</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt officia, sapiente earum odit laudantium eveniet? Accusamus quia omnis sint. Sit aperiam praesentium illo nam labore odit earum at? Sapiente, culpa!
                </span>
                </div>
            @endfor
            </div>
            <hr class="my-3">
            <div class="flex flex-row w-full items-center">
            <div class="w-full pr-3 relative">
                <input type="text" class="w-full bg-[#E9E9E9] rounded-md h-auto p-2 pr-10" placeholder="Add a comment...">
                <button id="send" type="submit" class="hidden absolute right-5 top-1/2 transform -translate-y-1/2"><i class="fa-regular fa-paper-plane " style="color: #000000;"></i></button>
            </div>
            <a href=""><i class="fa-regular fa-heart fa-2xl" style="color: #000000;"></i></a>
            </div>
        </div>
    </div>
    <script>
        const input = document.querySelector('input[type="text"]');
        const sendButton = document.getElementById('send');

        input.addEventListener('input', function() {
            if (input.value.trim() !== '') {
                sendButton.classList.remove('hidden');
            } else {
                sendButton.classList.add('hidden');
            }
        });
    </script>
@endsection
