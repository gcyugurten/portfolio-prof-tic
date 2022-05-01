<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ \App\Models\Setting::find(1)->favicon ? asset("storage/".\App\Models\Setting::find(1)->favicon) : ""; }}">
    
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

    @yield('styles')
    <title>@yield('title', "Panneau d'administrateur | Zahira Chouiref")</title>
</head>
<body>
    

    <div class="upper-nav">
        <div class="container">
            <a style="color: inherit" class="navbar-brand float-left" href="{{ route('index-page') }}">
                @if (\App\Models\Setting::find(1)->logo)
                    <img src="{{ asset('storage/'. \App\Models\Setting::find(1)->logo) }}" alt="">
                @else 
                    {{ env('APP_NAME') }}
                @endif
                
            </a>
            <div class="float-right">
                <form action="{{ route('logout') }}" method="POST" class="d-inline-block logout">
                    @csrf
                    <button type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    
                </form>
    
    
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

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
                                    Zahira Ch
                                </div>
                                <div class="admin d-block">Administrator</div>
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
                        
                        <li class="{{ Request::routeIs('admin.blog.index') ? "active" : "" }}">
                            <a href="{{ route('admin.blog.index') }}">
                                <i class="fas fa-pen"></i>
                                Blog
                            </a>
                        </li>
                        
                        <li class="{{ Request::routeIs('admin.settings') ? "active" : "" }}">
                            <a href="{{ route('admin.settings') }}">
                                <i class="fas fa-cog"></i>
                                Paramétres
                            </a>
                        </li>

                        

                    </ul>
                </nav>

            </aside>
        </div>


        <div class="col-md-9 px-4 pb-4">
            @yield('content')
        </div>

    </div>




 




    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> 
    @yield('scripts')

    <script src="{{ asset('js/admin/app.js') }}"></script>

</body>
</html>