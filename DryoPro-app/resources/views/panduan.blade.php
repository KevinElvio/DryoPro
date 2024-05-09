@extends('layouts.main')

@section('konten')
    <h1 class="font-bold sm:text-2xl text-xl sm:mt-40 mt-20 sm:ml-60 ml-3">Panduan</h1>
    @foreach ($content as $index => $post)  
    <div class="sm:mt-14 mt-3 sm:ml-60 ml-7">
        <div class="font-bold sm:text-lg text-sm mt-16 flex justify-between items-center dropdownBtn" data-id="{{ $index }}">
            <h1>{{ $post["title"] }}</h1>
            <svg class="w-10 h-10 sm:w-10 sm:mr-96 mx-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM135 241c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l87 87 87-87c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 345c-9.4 9.4-24.6 9.4-33.9 0L135 241z"/></svg>
        </div>
        <div class="mt-5 sm:pr-96 pr-10">
            <h1 class="hidden info" data-id="{{ $index }}">{!! $post["content"] !!}</h1>
        </div>
        <div class="border-b border-black flex justify-evenly text-2xl font-medium mt-10 max-w-screen-sm sm:max-w-screen-xl"></div>
    </div>
    @endforeach
    {{-- <script src="{{ asset('js/dropdownPanduan.js') }}"defer></script> --}}
    {{-- <script src="{{ asset ("js/dropdownPanduan.js") }}"></script> --}}
@endsection
