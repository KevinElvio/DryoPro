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
    <div class="mt-20 ">
        <div class="flex justify-between items-center mx-60">
            <div>
                <h1 class="text-6xl font-bold">Halo {{ auth()->user()->name }}!</h1>
                <div class="flex text-4xl font-normal">
                    <h3 class="">Mesin dalam kondisi,</h3>
                    <h3 class="text-red-500 ml-2">{{ $kondisi }}</h3>
                </div>
            </div>
            <div class="bg-white w-72 h-64 rounded-lg drop-shadow-lg flex flex-col items-center">
                <h1 class="mt-5 font-bold text-xl">Suhu</h1>
                <h1 class="font-medium text-5xl mt-5">{{ $suhu }}C</h1>
                <h1 class="font-bold mt-5 text-xl">Kelembapan</h1>
                <h1 class="font-medium text-5xl mt-5">{{ $kelembapan }} RH</h1>
            </div>
        </div>
        <div class="flex justify-end mr-72 mt-20">
            <input type="checkbox" id="toggleButton" class="hidden" />
            <label for="toggleButton" class="block w-40 h-20 bg-red-600 rounded-full p-1 duration-300 ease-in-out">
                <div
                    class="bg-black w-16 h-16 rounded-full shadow-md transform translate-x-0 duration-300 ease-in-out mt-1 ml-2 flex items-center justify-center">
                    <h1 class="text-black text-3xl font-bold ml-32">Off</h1>
                </div>
            </label>
        </div>

    </div>
@endsection
