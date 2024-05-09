@extends('layouts.main')

@section('konten')
    <div class="flex flex-col w-screen items-center mt-40 sm:text-4xl text-2xl">
        <h1 class="font-bold">Riwayat</h1>
        <div class="border-b border-black flex sm:justify-evenly justify-around text-2xl font-medium mt-20 w-1/4 -ml-5">
            <h1 class="mb-5 mr-10 sm:mr-0">Date</h1>
            <h1 class="mb-5 ml-10 sm:ml-0">Time</h1>
        </div>
        @foreach ($riwayat as $item)
            <div class="sm:my-5 mt-2 flex items-center sm:px-32 px-20 sm:text-2xl text-lg">
                <h3 class="sm:mr-10 mr-5">{{ $item->waktu->toDateString() }}</h3>
                <h3 class="sm:ml-10 ml-5">{{ $item->waktu->toTimeString() }}</h3>
            </div>
        @endforeach
        <div class="mt-16 sm:mt-3">
            {{ $riwayat->links() }}
        </div>
    </div>

@endsection
