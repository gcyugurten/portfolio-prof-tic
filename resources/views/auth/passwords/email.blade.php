@extends('layouts.mainLayout')


@section('content')

    @include('partials.navbar')
    
    <div class="container py-5 mb-5">
        <h1 class="text-center py-5 special-heading">Réinitialiser le mot de passe</h1>
        
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <input type="email" placeholder="Adresse e-mail" class="form-control customized @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Envoyer le lien de réinitialisation
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



    @include('partials.footer')
    

@endsection





















































@section('content')

@endsection
