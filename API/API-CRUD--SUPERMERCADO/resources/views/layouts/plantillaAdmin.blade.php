<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="{{ asset('vendor/css/misEstilos.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body class="fondoABM">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.partials.alert_Update')
                <div>
                    <a href="{{ URL::previous() }}" class="btn btn-warning mb-5"><span class="fa fa-arrow-left fa-3x"> Volver </span></a>
                </div>
            </div>
        </div>
        @yield('cuerpo')
    </div>
</body>
</html>
