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
        <div class="flex justify-between items-center mx-60 mt-40">
            <div>
                <h1 class="text-6xl font-bold">Halo {{ auth()->user()->name }}!</h1>
                <div class="flex text-4xl font-normal">
                    <h3 class="">Mesin dalam kondisi,</h3>
                    <h3 class="text-red-500 ml-2 statusText duration-300 ease-in-out">Mati</h3>
                </div>
            </div>
            <div class="bg-white w-72 h-64 rounded-lg drop-shadow-lg flex flex-col items-center">
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
        <div class="flex justify-end mr-72 mt-16">
            
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" onchange="ubahStatus(this.checked)" class="sr-only peer">
                <div
                    class="relative w-24 h-14 bg-red-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-500 dark:peer-focus:ring-white rounded-full peer dark:bg-red-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[8px] after:start-[8px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-10 after:w-10 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                </div>
                <span class="ms-3 text-3xl font-medium text-black dark:text-black" id="status">Off</span>
            </label>

        </div>
    </div>
    {{-- <script src="{{ asset ("js/toogleOnOff.js") }}"></script> --}}
@endsection
