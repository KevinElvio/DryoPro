<nav class="bg-white sm:flex sm:flex-row items-center py-4 px-8 drop-shadow-xl fixed top-0 z-10 w-full h-16 sm:h-20 area">
    <div class="flex justify-between">
        <h1 class="text-black sm:text-3xl font-bold sm:mx-20 text-2xl">DryoPro</h1>
        <span class="sm:hidden cursor-pointer text-xl open" onclick="Menu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>          
        </span>
        <span class="hidden close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
              
        </span>
    </div>
    
    <div class="sm:flex sm:flex-row sm:opacity-100 opacity-0 pilihan">
        <div class="sm:flex sm:flex-row text-gray-800 font-bold sm:mx-96">
            <ul class="sm:flex sm:space-x-9 sm:flex-row flex-col justify-start mt-8 sm:mt-3">
                <li class="">
                    <a href="/beranda" class="hover:text-black ">Beranda</a>
                </li>
                <li class="sm:mx-40">
                    <a href="/riwayat" class="hover:text-black">Riwayat</a>
                </li>
                <li class="">
                    <a href="/panduan" class="hover:text-black">Panduan</a>
                </li>
            </ul>
    
        </div>
        <form action="/logout" method="post" class="">
            @csrf
            <button
                class="border-black border-2 text-black border-opacity-100 hover:bg-black hover:text-white font-medium py-2 px-4 rounded-full sm:ml-96 mt-4 sm:mt-0 log"
                type="">Logout
            </button>
        </form>
    </div>
    
</nav>
