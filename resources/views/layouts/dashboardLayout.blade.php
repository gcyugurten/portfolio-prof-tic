<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ \App\Models\Setting::find(1)->favicon ? asset("storage/".\App\Models\Setting::find(1)->favicon) : ""; }}">
    
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elearning/app.css') }}">

    @yield('styles')

    <title>@yield('title', "Elearning dashboard | Zahira Chouiref")</title>
</head>
<body>
    
    @include('elearning.partials.upper-nav')

    <div class="row main-row" style="min-height: calc(100vh - 75px)">
        <div class="col-md-3">
            <aside class="main-sidebar px-4">

                <div class="row">
                    <div class="col-md-12 col-10">
                        <div class="avatar m-auto py-4 ">
                            <div class="img float-left pr-3">
                                <img src="{{ asset('imgs/avatar-default.png') }}" alt="">
                            </div>
                            <div class="user">
                                <div class="name">
                                    {{ "@".strtolower(str_replace(' ', "", auth()->user()->fullName )) }}    
                                </div>
                                <div class="admin d-block"><i class="fas fa-user-graduate"></i> Etudiant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 d-md-none">
                        <div class="side-nav-toggler">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
        
                <nav class="side-nav pt-3">
                    <ul>
                        <li class="mb-4">
                            <a href="{{ route('dashboard') }}">
                                <i class="fas fa-home"></i>
                                Accueil
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('dashboard.classroom') }}">
                                <i class="fas fa-user-clock"></i>
                                Membres & temps d'étude
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('dashboard.settings') }}">
                                <i class="fas fa-cog"></i>
                                Paramétres
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>
        </div>


        <div class="col-md-9 px-4">
            @yield('content')
        </div>

    </div>




    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> 
    @yield('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>