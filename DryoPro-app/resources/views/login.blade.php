<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class=" flex items-center justify-center h-screen">
    <div class="items-center justify-center mb-40">
        <H1 class="text-merah text-9xl font-bold text-shadow drop-shadow-2xl">DryoPro</H1>
        <div class="bg-white/50 p-8 rounded-3xl shadow-2xl mt-20 ">
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-black font-bold">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-200 border-2 border-black rounded-xl px-4 py-2 focus:outline-none focus:border-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-black font-bold">Password</label>
                    <input type="password" id="password" name="password" class="w-full bg-gray-200 border-2 border-black rounded-xl px-4 py-2 focus:outline-none focus:border-blue-400" required>
                </div>
            </form>
        </div>
        <button type="submit" class="mt-10 w-40 h-14 bg-kuning text-black rounded-full px-4 py-2 font-bold text-2xl ml-40 drop-shadow-2xl">LOGIN</button>
    </div>

</body>

</html>