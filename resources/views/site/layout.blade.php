<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Icones do google --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Icones do font awesome--}}
    <script src="https://kit.fontawesome.com/dfe796e1ad.js" crossorigin="anonymous"></script>

   {{-- css e javascript --}}
   @vite(['resources/css/app.css','resources/js/app.js'])

   {{-- css Materialize --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

{{-- NavBar --}}
@include('partials.navbar')

{{-- Slide --}}
@include('partials.banner-slide')

{{-- conteúdo principal --}}
@yield('content')

{{-- Rodapé --}}
@include('partials.footer')ph

{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{-- javascript Materialize --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
