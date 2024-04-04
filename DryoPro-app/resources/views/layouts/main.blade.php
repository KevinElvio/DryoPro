<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body class="bg-gray-200 font-poppins">
    <nav class="bg-white flex items-center py-4 px-8 drop-shadow-xl">
        <h1 class="text-black text-3xl font-bold mx-20 ">DryoPro</h1>

        <div class="flex space-x-9 text-gray-800 font-bold mx-96">
            <a href="/beranda" class="hover:text-black ">Beranda</a>
            <a href="/riwayat" class="hover:text-black">Riwayat</a>
            <a href="/about" class="hover:text-black">Panduan</a>
        </div>
        <button class="border-black border-2 text-black border-opacity-100 hover:bg-black hover:text-white font-medium py-2 px-4 rounded-full ml-96">
            Logout
        </button>
    </nav>
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