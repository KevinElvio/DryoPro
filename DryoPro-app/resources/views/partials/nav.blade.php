<nav
    class="bg-white w-full top-0 z-10 fixed xl:flex xl:items-center xl:py-4 xl:px-8 xl:drop-shadow-xl xl:top-0 xl:z-10 xl:w-full">
    <div class="flex justify-around mx-5">
        <a href="/beranda">
            <h1 class="text-black text-3xl my-5 mr-14 | xl:text-3xl font-bold xl:mx-20 ">DryoPro</h1>
        </a>

        <div>
            <button class="relative group xl:hidden MenuToggle">
                <div
                    class="relative flex overflow-hidden items-center justify-center rounded-full w-[50px] h-[50px] transform transition-all bg-slate-700 ring-0 ring-gray-300 hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md mt-5">
                    <div
                        class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                        <div
                            class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10">
                        </div>
                        <div
                            class="bg-white h-[2px] w-7 rounded transform transition-all duration-300 group-focus:translate-x-10 delay-75">
                        </div>
                        <div
                            class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10 delay-150">
                        </div>

                        <div
                            class="absolute items-center justify-between transform transition-all duration-500 top-2.5 -translate-x-10 group-focus:translate-x-0 flex w-0 group-focus:w-12">
                            <div
                                class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 rotate-0 delay-300 group-focus:rotate-45">
                            </div>
                            <div
                                class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 -rotate-0 delay-300 group-focus:-rotate-45">
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>

    
    <div class="menu xl:space-x-9 xl:block">
        <div class="flex flex-col my-3 list-none mr-20 xl:flex xl:flex-row text-gray-800 font-bold">
            <ul class="text-end mr-8 xl:flex xl:flex-row xl:space-x-9 xl:mx-96 ">
                <li class="my-2 xl:text-2xl"><a href="/beranda" class="hover:text-black">Beranda</a></li>
                <li class="my-2 xl:text-2xl"><a href="/riwayat" class="hover:text-black">Riwayat</a></li>
                <li class="my-2 xl:text-2xl"><a href="/about" class="hover:text-black">Panduan</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="border-black border rounded-full py-2 px-4 mb-5 xl:border-2 text-black border-opacity-100 hover:bg-black hover:text-white font-medium xl:mx-96 xl:py-2 xl:px-4 xl:rounded-full log"
                                type="">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
