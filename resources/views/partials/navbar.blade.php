<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index-page') }}">
            @if (\App\Models\Setting::find(1)->logo)
                <img src="{{ asset('storage/'. \App\Models\Setting::find(1)->logo) }}" alt="">
            @else 
                Zahira
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::routeIs('index-page') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index-page') }}">Accueil</a>
                </li>
                <li class="nav-item {{ Request::routeIs('a-propos') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('a-propos') }}">A propos</a>
                </li>
                <li class="nav-item {{ Request::routeIs('enseignement') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('enseignement') }}">Enseignement</a>
                </li>
                <li class="nav-item {{ Request::routeIs('recherche') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('recherche') }}">Recherche</a>
                </li>
                <li class="nav-item {{ Request::routeIs('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                
                <li class="nav-item">
                    <div class="nav-buttons d-sm-none d-block">
                        <a href="{{ route('login') }}" class="main-btn">Connexion</a>
                    </div>
                </li>
                
            </ul>
        
        </div>
        <div class="float-right nav-buttons d-md-block d-none">
            <a href="{{ route('login') }}" class="main-btn">Connexion</a>
        </div>
        <div class="clearfix d-md-block d-none"></div>
    </div>
</nav>
