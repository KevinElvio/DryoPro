@extends('layouts.main')

@section('konten')
    <div class="flex flex-col justify-center items-center sm:mt-40 mt-32 sm:text-4xl text-xl bg-white sm:mr-96 sm:ml-96 pb-16 sm:py-14 rounded-2xl">
        <h1 class="font-bold mt-10 sm:mt-0">Riwayat</h1>
        <div class="border-b border-black flex sm:justify-evenly sm:text-2xl text-sm font-medium sm:mt-20 mt-10 sm:w-1/2 w-72 ">
            <h1 class="mb-2 mr-14 ml-6 sm:-ml-3 sm:mr-28">Tanggal</h1>
            <h1 class="mb-2 sm:ml-0 sm:mx-20 ">Waktu</h1>
            <h1 class="mb-2 ml-10 sm:ml-0">Status</h1>
        </div>
        @foreach ($riwayat as $item)
            <div class="sm:my-5 mt-2 flex items-center sm:px-32 px-20 sm:text-2xl text-sm">
                <h3 class=" sm:-ml-10 sm:mr-24 -ml-4">{{ $item->waktu->toDateString() }}</h3>
                <h3 class=" sm:ml-5 sm:mr-20 ml-10">{{ $item->waktu->toTimeString() }}</h3>
                <h3 class=" sm:ml-10 ml-10">{{ $item->status }}</h3>
            </div>
        @endforeach
        <div class="mt-16 sm:mt-3">
            {{ $riwayat->links() }}
        </div>
    </div>

    

@endsection
