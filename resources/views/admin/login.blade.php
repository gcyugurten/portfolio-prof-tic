@extends('layouts.mainLayout')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login py-5">
                    <div class="special-heading text-center">Connexion</div>
                    <div class="sub-heading pb-4 text-center" style="font-family: 'Tahoma';">Admin</div>
                    @if (!$errors->isEmpty())
                        <div class="alert alert-danger p-3">
                            @foreach ($errors->all() as $error)
                                <div style="list-style: none">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('admin.login') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" placeholder="Email" class="form-control mb-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group">
                            <input id="password" placeholder="Mot de passe" type="password" class="form-control" name="password" required autocomplete="current-password">
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-4 c-white">
                                Se connecter
                            </button>
        
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    

    

@endsection





