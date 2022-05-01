@extends('layouts.mainLayout')

@section('body_class') seamless-bg @endsection




@section('content')

    @include('partials.navbar')
    <div class="seamless-overlay py-5">
        <div class="login-form py-4">
            <div class="special-heading pb-5 text-center">Se connecter</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" placeholder="Votre Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" placeholder="Votre mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Souvenir de moi
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Se connecter
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Mot de passe oublié
                        </a>
                    @endif
                    {{-- <a href="{{ route('register') }}" class="btn btn-link">Créer un compte</a> --}}
                </div>
            </form>
        </div>
                
    </div>


    @include('partials.footer')
    

@endsection



