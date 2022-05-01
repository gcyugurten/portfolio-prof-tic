@extends('layouts.mainLayout')

@section('content')
        
    @include('partials.navbar')

    <div class="container">

        <div class="text-center py-5">
            <div class="special-heading">Vérifiez votre email</div>
            <p class="p-content pt-5">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Un lien de vérification a été envoyé à votre adresse e-mail.
                    </div>
                @endif

                Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.
                
                <form class="" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    Si vous n'avez pas reçu l'e-mail
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">cliquez ici pour en demander un autre</button>.
                </form>
            </p>
        </div>

    </div>



    @include('partials.footer')

@endsection


























