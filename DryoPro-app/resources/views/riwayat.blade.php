@extends('layouts.main')

@section('konten')
    <div class="flex flex-col justify-center items-center mt-40 sm:text-4xl text-2xl bg-white mr-96 ml-96 py-14 rounded-2xl">
        <h1 class="font-bold">Riwayat</h1>
        <div class="border-b border-black flex sm:justify-evenly justify-between text-2xl font-medium mt-20 w-1/2">
            <h1 class="mb-5 mr-10 sm:mr-28">Tanggal</h1>
            <h1 class="mb-5 sm:ml-0 sm:mx-20">Waktu</h1>
            <h1 class="mb-5 ml-10 sm:ml-0">Status</h1>
        </div>
        @foreach ($riwayat as $item)
            <div class="sm:my-5 mt-2 flex items-center sm:px-32 px-20 sm:text-2xl text-lg ">
                <h3 class=" -ml-20">{{ $item->waktu->toDateString() }}</h3>
                <h3 class=" ml-5 sm:mx-20">{{ $item->waktu->toTimeString() }}</h3>
                <h3 class=" ml-5">{{ $item->status }}</h3>
            </div>
        @endforeach
        <div class="mt-16 sm:mt-3">
            {{ $riwayat->links() }}
        </div>
    </div>

@endsection
