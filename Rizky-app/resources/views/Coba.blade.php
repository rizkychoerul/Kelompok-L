<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @section('sidebar')
        This is the master sidebar
    @show

    <div class="container">
        @yield('content')
    </div>

    <br>

    <x-custom-btn label="Tambah Data" theme="primary" icon="fa fa-plus"/>

    <br>

    {{-- component alert --}}
    {{-- <x-alert>
        <x-slot name="title">
            Server Error
        </x-slot>
        <strong>Whoops !</strong> Something went wrong !
    </x-alert> --}}

    {{-- Anonymous --}}
    <x-alert type="error" :message="$message" class="mb-4"/>
    
</body>
</html>