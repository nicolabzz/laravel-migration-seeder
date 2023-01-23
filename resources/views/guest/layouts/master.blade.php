<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- non so perche ma mi da errore se lo attivo, anche se prima faccio npm run dev/watch --}}
    {{-- <link rel="stylesheet" href="{{assets('css/app.css')}}"> --}}

    <title>ORARI TRENI CIOUF CIOUF</title>

</head>
<body>

    @include('guest.partials.header')

        @yield('main_content')

    @include('guest.partials.footer')

</body>
</html>
