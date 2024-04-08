<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body class="bg-gray-200 font-poppins">

    @include('partials.nav')

    @yield('konten')
    {{-- <div class="mt-64">
        <div class="flex items-center justify-center">
            <h1 class="text-5xl font-bold">Halo Syukron!</h1>
        </div>
        <div class="flex items-center justify-center mt-5">
            <h3 class="text-2xl font-bold">Klik tombol di bawah ini dan mesin akan menyala!</h3>
        </div>
        <div class="flex items-center justify-center mt-14">
            <input type="checkbox" id="toggleButton" class="hidden" />
            <label for="toggleButton" class="block w-52 h-20 bg-orange rounded-full p-1 duration-300 ease-in-out">
                <div class="bg-white w-16 h-16 rounded-full shadow-md transform translate-x-0 duration-300 ease-in-out mt-1 ml-2 flex items-center justify-center">
                    <h1 class="text-white text-3xl font-bold ml-40">ON</h1>
                </div>
            </label>
        </div>
    </div> --}}
</body>

</html>