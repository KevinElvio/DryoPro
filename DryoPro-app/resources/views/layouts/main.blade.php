<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>

<body>
    <nav class="bg-kuning flex items-center py-4 px-8 drop-shadow-xl">
        <h1 class="text-merah text-4xl font-bold mx-20 ">DryoPro</h1>

        <div class="flex space-x-9 text-black font-bold mx-96">
            <a href="/beranda" class="hover:text-merah">Beranda</a>
            <a href="/riwayat" class="hover:text-merah">Riwayat</a>
            <a href="/about" class="hover:text-merah">Tentang Kami</a>
        </div>

        <button class="border-black border-2 border-opacity-100 hover:bg-merah text-black font-medium py-2 px-4 rounded-full ml-96">
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