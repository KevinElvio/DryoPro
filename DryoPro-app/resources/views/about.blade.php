@extends('layouts.main')

@section('konten')
    <h1 class="font-bold text-2xl mt-14 ml-60">Panduan</h1>
    @foreach ($panduan as $post)  
    <div class="mt-14 ml-60">
        <div class="font-bold text-lg mt-16 flex justify-between items-center dropdownBtn">
            <h1>{{ $post["title"] }}</h1>
            <svg class="w-10 mr-96" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>

        </div>
        <div class="mt-5 pr-96 hidden info">
            <h1>{!! $post["panduan"] !!}</h1>
        </div>
        <div class="border-b border-black flex justify-evenly text-2xl font-medium mt-10 max-w-screen-xl"></div>
    </div>
    <script src="{{ asset ("js/dropdownPanduan.js") }}"></script>
    @endforeach




@endsection
