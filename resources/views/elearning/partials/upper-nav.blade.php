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