<nav class="bg-white flex items-center py-4 px-8 drop-shadow-xl fixed top-0 z-10 w-full">
    <h1 class="text-black text-3xl font-bold mx-20 ">DryoPro</h1>

    <div class="flex space-x-9 text-gray-800 font-bold mx-96">
        <a href="/beranda" class="hover:text-black ">Beranda</a>
        <a href="/riwayat" class="hover:text-black">Riwayat</a>
        <a href="/about" class="hover:text-black">Panduan</a>
    </div>
    <form action="/logout" method="post"> 
        @csrf       
        <button class="border-black border-2 text-black border-opacity-100 hover:bg-black hover:text-white font-medium py-2 px-4 rounded-full ml-96" type="">
            Logout
        </button>
    </form>
</nav>