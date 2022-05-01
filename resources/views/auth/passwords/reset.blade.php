@extends('layouts.mainLayout')


@section('content')

    @include('partials.navbar')

    <div class="login-form py-5 my-5" style="box-shadow: none; border: 1px solid #dddddd">
        <h1 style="font-size: 30px" class="pb-4 text-center special-heading">Réinitialiser le mot de passe</h1>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <input placeholder="Adresse e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input placeholder="Confirmez le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Réinitialiser
                    </button>
                </div>
            </div>
        </form>

    </div>




    @include('partials.footer')
    

@endsection






















