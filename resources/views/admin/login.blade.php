@extends('layouts.mainLayout')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login py-5">
                    <div class="special-heading text-center">Login</div>
                    <div class="sub-heading pb-4 text-center" style="font-family: 'Tahoma';">As an administrator</div>
                    <form action="{{ route('login') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" placeholder="Your Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
        
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    

    

@endsection





