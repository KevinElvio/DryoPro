@extends('layouts.main')

@section('konten')
    <div class="mt-20">
        <div class="flex items-center justify-center">
            <h1 class="text-5xl font-bold">Halo Syukron!</h1>
        </div>
        <div class="flex items-center justify-center mt-4">
            <h3 class="text-2xl font-bold">Mesin dalam kondisi, mati</h3>
        </div>
        <div class="flex items-center justify-center mt-14">

            <div class="h-40 w-80 bg-kuning rounded-2xl">
                <h1 class="font-bold flex justify-center items-center text-2xl mt-8">Suhu</h1>
                <h1 class="font-bold flex justify-center items-center text-6xl">0°C</h1>
            </div>
            <div class="h-40 w-80 ml-20 bg-kuning rounded-2xl">
                <h1 class="font-bold flex justify-center items-center text-2xl mt-8">Kelembapan</h1>
                <h1 class="font-bold flex justify-center items-center text-6xl">0 RH</h1>
            </div>

        </div>
        <div class="display flex justify-center items-center mt-20">
            <div class="bg-green-500 h-14 w-32 rounded-xl flex justify-center items-center">
                <button class=" text-4xl font-bold text-white">ON</button>
            </div>
            <div class="bg-gray-400 h-14 w-32 ml-10 rounded-xl flex justify-center items-center">
                <button class=" text-4xl font-bold text-white">OFF</button>
            </div>
        </div>
    @endsection


    {{-- <input type="checkbox" id="toggleButton" class="hidden" />
        <label for="toggleButton" class="block w-52 h-20 bg-orange rounded-full p-1 duration-300 ease-in-out">
            <div class="bg-white w-16 h-16 rounded-full shadow-md transform translate-x-0 duration-300 ease-in-out mt-1 ml-2 flex items-center justify-center">
                <h1 class="text-white text-3xl font-bold ml-40">ON</h1>
            </div>
        </label> --}}
