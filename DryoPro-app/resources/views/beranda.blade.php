<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>

<body>
    <nav class="bg-gradient-to-r from-gradasi1 to-gradasi2 flex items-center py-4 px-8 drop-shadow-3xl">
        <h1 class="text-merah text-3xl font-bold mx-20">DryoPro</h1>

        <div class="flex space-x-9 text-black font-bold mx-96">
            <a href="#" class="hover:text-merah">Beranda</a>
            <a href="#" class="hover:text-merah">Riwayat</a>
            <a href="#" class="hover:text-merah">Tentang Kami</a>
        </div>

        <button class="border-black border-2 border-opacity-100 hover:bg-merah text-black font-medium py-2 px-4 rounded-full ml-96">
            Logout
        </button>
    </nav>

</body>

</html>