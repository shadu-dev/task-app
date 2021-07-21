<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
<link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">

    <title>@yield('title')</title>
</head>
<body>   

    {{-- creamos el contendedo de nuestra sección --}}
@yield('content')



<script src="{{ asset('/js/jquery.js')}}"></script>
<script src="{{ asset('/js/bootstrap/bootstrap.min.js')}}"></script>

@yield('scripts')
</body>
</html>