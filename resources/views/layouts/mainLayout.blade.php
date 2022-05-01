<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ \App\Models\Setting::find(1)->favicon ? asset("storage/".\App\Models\Setting::find(1)->favicon) : ""; }}">

    @yield('metaTags')

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('styles')

    <title>@yield('title', "Zahira Chouiref | Site Officiel")</title>
    
</head>
<body class="@yield('body_class')">
    

    @yield('content')



    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> 
    @yield('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>