<nav class="bg-white | xl:flex xl:items-center xl:py-4 xl:px-8 xl:drop-shadow-xl xl:fixed xl:top-0 xl:z-10 xl:w-full">
    <h1 class="text-black text-xl mt-10 | xl:text-3xl font-bold xl:mx-20 ">DryoPro</h1>

    <div class="  xl:flex xl:space-x-9 text-gray-800 font-bold xl:mx-96">
        <a href="/beranda" class="hover:text-black ">Beranda</a>
        <a href="/riwayat" class="hover:text-black">Riwayat</a>
        <a href="/about" class="hover:text-black">Panduan</a>
    </div>
    <form action="/logout" method="post"> 
        @csrf    
        <button class="border-black xl:border-2 text-black border-opacity-100 hover:bg-black hover:text-white font-medium xl:py-2 xl:px-4 xl:rounded-full xl:ml-96 log" type="">Logout
        </button>
    </form>
</nav>