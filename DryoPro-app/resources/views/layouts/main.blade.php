<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <script src="{{ asset ("jquery/jquery.min.js") }}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        setInterval(function() {
            $("#suhu").load("{{ url('bacasuhu') }}");
            $("#kelembaban").load("{{ url('bacakelembaban') }}");
        }, 1000);
    });
    </script>
</head>

@vite(['/resources/js/app.js'])
<body class="bg-gray-200 font-poppins">

    @include('partials.nav')

    @yield('konten')
    
    @include('partials.footer')

    <script src="{{ asset ("js/dropdownPanduan.js") }}"></script>
    <script src="{{ asset ("js/toogleOnOff.js") }}"></script>
    <script src="{{ asset ("js/logOut.js") }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- @include('sweetalert::alert') --}}

</body>

</html>