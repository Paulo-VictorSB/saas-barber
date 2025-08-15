<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    {{-- Fonte --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap"
        rel="stylesheet">
    {{-- Font-Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- Datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/datatables/datatables.min.css') }}">
    {{-- Flatpickr --}}
    <link rel="stylesheet" href="{{ asset('assets/flatpickr/flatpickr.min.css') }}">
    <title>SAAS BARBER</title>
</head>

<body>

    @yield('content')

</body>

</html>
