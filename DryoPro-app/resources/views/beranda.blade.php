@extends('layouts.main')

@section('konten')
    <div class="mt-20 ">
        {{-- <div class="flex flex-col">
            <div class="bg-merah w-12 h-12"></div>
            <h1 class="text-4xl font-bold">Halo Syukron!</h1>
            <div class="flex text-xl font-normal">
                <h3 class=" ">Mesin dalam kondisi,</h3>
                <h3 class=" text-green-700 ml-2">mati</h3>

            </div>
        </div> --}}
        <div class="flex justify-between items-center mx-60">
            <div>
                <h1 class="text-6xl font-bold">Halo Syukron!</h1>
                <div class="flex text-4xl font-normal">
                    <h3 class="">Mesin dalam kondisi,</h3>
                    <h3 class="text-red-500 ml-2">mati</h3>
                </div>
            </div>
            <div class="bg-white w-72 h-64 rounded-lg drop-shadow-lg flex flex-col items-center">
                <h1 class="mt-5 font-bold text-xl">Suhu</h1>
                <h1 class="font-medium text-5xl mt-5">0°C</h1>
                <h1 class="font-bold mt-5 text-xl">Kelembapan</h1>
                <h1 class="font-medium text-5xl mt-5">0 RH</h1>
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
