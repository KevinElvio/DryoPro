<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="font-poppins p-5">

    <div class="mt-10 ml-20">
        <h1 class="font-bold text-4xl">DryoPro</h1>
        @if (@session()->has('loginError'))
            <div class="flex justify-center items-center mr-20">
                <div class="bg-yellow-300 border text-black font-medium py-10 w-1/4 flex justify-center rounded relative"
                    role="alert">
                    <svg class="w-10 mx-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                    {{ session('loginError') }}
                </div>
            </div>
        @endif
    </div>
    <div class="flex flex-col items-center mt-20">


        <div class="-ml-72">
            <h1 class="font-semibold text-3xl mr-28">Login</h1>
            <h1 class="font-normal text-xl">Hi, Welcome Back</h1>
        </div>
        <form class="mt-20 w-1/4" action="/login" method="POST">
            @csrf
            <div class="mb-5">
                <label for="email" class="block text-bold font-medium mb-2">Email</label>
                <input type="text" id="email" name="email"
                    class="w-full h-12 px-3 py-2 border border-black rounded-md focus:outline-none focus:border-black"
                    placeholder="Enter your email" required autofocus @error('email') is-invalid @enderror>
                {{-- @error('email')
                    <div class="text-red-500">Harap isi data dengan benar!</div>
                @enderror --}}
            </div>
            <div class="mb-10">
                <label for="password" class="block text-black font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full h-12 px-3 py-2 border border-black rounded-md focus:outline-none focus:border-black"
                    placeholder="Enter your password" required>
                {{-- @error('password')
                    <div class="text-red-500">Harap isi password dengan benar!</div>
                @enderror --}}
            </div>
            <button type="submit"
                class="w-full h-14 bg-black text-white font-normal px-4 py-2 rounded-xl hover:bg-gray-900 transition duration-200">Login</button>
        </form>
    </div>
</body>

</html>
