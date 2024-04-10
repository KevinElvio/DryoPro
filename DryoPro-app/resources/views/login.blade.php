<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="font-poppins p-5">
    {{-- @if (@session()->has('loginError'))
        <div class="bg-red-400 border border-red-400 text-black px-4 py-3 rounded relative" role="alert">
            {{ session('loginError') }}
        </div>
    @endif --}}
    <div class="mt-10 ml-20">
        <h1 class="font-bold text-4xl">DryoPro</h1>
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
                @error('email')
                    <div class="text-red-500">Harap isi email dengan benar!</div>
                @enderror
            </div>
            <div class="mb-10">
                <label for="password" class="block text-black font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full h-12 px-3 py-2 border border-black rounded-md focus:outline-none focus:border-black"
                    placeholder="Enter your password" required>
                @error('password')
                    <div class="text-red-500">Harap isi password dengan benar!</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full h-14 bg-black text-white font-normal px-4 py-2 rounded-xl hover:bg-gray-900 transition duration-200">Login</button>
        </form>
    </div>
</body>

</html>
