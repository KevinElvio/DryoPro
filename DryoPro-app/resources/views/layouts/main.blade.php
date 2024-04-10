<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

@vite(['/resources/js/app.js'])
<body class="bg-gray-200 font-poppins">

    @include('partials.nav')

    @yield('konten')
</body>

</html>