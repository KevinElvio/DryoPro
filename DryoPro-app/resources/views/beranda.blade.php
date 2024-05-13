@extends('layouts.main')


@section('konten')
    {{-- @if (@session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">Berhasil Login</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.359 5.652a.5.5 0 1 0-.707.707L9.293 10l-3.64 3.641a.5.5 0 0 0 .707.707L10 10.707l3.641 3.641a.5.5 0 0 0 .707-.707L10.707 10l3.641-3.641a.5.5 0 0 0 0-.707z" />
            </svg>
        </span>
    </div>
@endif --}}



    <div class="mt-20">
        @if (@session()->has('Warning'))
            <div class="flex justify-center items-center mt-5">
                <div class="bg-red-500 border text-black font-sm py-2 w-80 flex justify-center rounded relative"
                    role="alert">
                    <svg class="w-10 mx-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                    {{ session('Warning') }}
                </div>
            </div>
        @endif
        <div class=" flex flex-col items-center justify-center sm:flex-row sm:justify-around sm:mx-40 sm:mt-40">
            <div class="sm:ml-10 mb-20 mr-4 sm:mr-0">
                <h1 class="text-2xl sm:mr-32 sm:text-6xl font-bold">Halo {{ auth()->user()->name }}!</h1>
                <div class="flex sm:flex-row flex-col sm:text-4xl text-xl font-normal mr-10 sm:-mr-10">
                    <h3 class="">Lampu dalam kondisi,</h3>
                    <h3 class="text-red-500 sm:ml-2 statusText duration-300 ease-in-out">Mati</h3>
                </div>
            </div>
            <div class="bg-white w-72 h-64 rounded-lg drop-shadow-lg flex flex-col items-center ">
                <h1 class="mt-5 font-bold text-xl">Suhu</h1>
                <div class="flex">
                    <h1 class="font-medium text-5xl mt-5 mr-3" id="suhu">0</h1>
                    <h1 class="font-medium text-5xl mt-5">°C</h1>
                </div>
                <h1 class="font-bold mt-5 text-xl">Kelembaban</h1>
                <div class="flex">
                    <h1 class="font-medium text-5xl mt-5 mr-5" id="kelembaban">0</h1>
                    <h1 class="font-medium text-5xl mt-5">RH</h1>
                </div>
            </div>
        </div>
        <div class="flex justify-end sm:mr-96 mr-28 mt-16 mb-40">
            <form id="toogleForm" action="/kontrol" method="get">
                @csrf
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" onchange="ubahStatus(this.checked)" name="status"
                        class="sr-only peer">
                    <div
                        class="relative w-24 h-14 bg-red-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-500 dark:peer-focus:ring-white rounded-full peer dark:bg-red-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[8px] after:start-[8px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-10 after:w-10 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                    </div>
                    <span class="ms-3 text-3xl font-medium text-black dark:text-black" id="status">Off</span>
                </label>
            </form>


        </div>
    </div>
    {{-- <script src="{{ asset('js/toogleOnOff.js') }}"defer></script> --}}
    {{-- <script src="{{ asset('js/logOut.js') }}"></script> --}}
@endsection
