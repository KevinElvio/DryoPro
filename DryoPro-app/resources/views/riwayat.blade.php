@extends('layouts.main')

@section('konten')
    <div class="flex flex-col w-screen items-center mt-40 text-4xl">
        <h1 class="font-bold">Riwayat</h1>
        <div class="border-b border-black flex justify-evenly text-2xl font-medium mt-20 w-1/4 ">
            <h1 class="mb-5">Date</h1>
            <h1 class="mb-5">Time</h1>
        </div>
        @foreach ($riwayat as $item)
            <div class="my-5 flex items-center px-32 text-2xl">
                <h3 class="mr-10">{{ $item->waktu->toDateString() }}</h3>
                <h3 class="ml-10">{{ $item->waktu->toTimeString() }}</h3>
            </div>
        @endforeach
        {{ $riwayat->links() }}
    </div>

@endsection
