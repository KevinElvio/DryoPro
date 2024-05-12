<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>

    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kelembaban").load("{{ url('bacakelembaban') }}");
            }, 1000);
        });


        //Status History
        // $(document).ready(function() {
        //     $('button.on').click(function() {
        //         // Lakukan sesuatu ketika tombol "on" ditekan
        //         $.ajax({
        //             url: '/dashboard/toogle-status',
        //             type: 'POST',
        //             contentType: 'application/json',
        //             data: JSON.stringify({
        //                 status: 'Off'
        //             }),
        //             success: function(response) {
        //                 // Tanggapan berhasil diterima, mengarahkan pengguna kembali ke halaman beranda
        //                 // window.location.href = '/dashboard';
        //                 console.log(response.status);
        //             },
        //             error: function(xhr, status, error) {
        //                 // Tanggapan tidak berhasil diterima, lakukan penanganan kesalahan di sini jika diperlukan
        //                 console.error(error);
        //             }
        //         });
        //     });
        // });
    </script>
</head>

@vite(['/resources/js/app.js'])

<body class="bg-gray-200 font-poppins">

    @include('partials.navbar')

    @yield('konten')

    @include('partials.footer')




    {{-- <script src="{{ asset('jquery/jquery.min.js') }}"></script>  --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- @include('sweetalert::alert') --}}

</body>

</html>
