@extends('layouts.mainLayout')
@section('body_class') seamless-bg @endsection


@section('content')
        
    @include('partials.navbar')


    <div class="seamless-overlay py-5">
        <div class="login-form register">
            <div class="py-4">
                <div class="special-heading text-center pb-5">Créer un <span>compte</span></div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}" placeholder="Nom complet" required autocomplete="name" autofocus>

                        @error('fullName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group password-box">
                        <input placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="toggle-password">
                            <i class="fas fa-eye" id="show"></i>
                            <i class="fas fa-eye-slash d-none" id="hide"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group password-box">
                        <input placeholder="Confirmer le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="toggle-password">
                            <i class="fas fa-eye" id="show"></i>
                            <i class="fas fa-eye-slash d-none" id="hide"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Créer
                        </button>
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Se connecter
                        </a>
                    </div>
                </form>
            </div>
                
        </div>
    </div>        



    @include('partials.footer')

@endsection

