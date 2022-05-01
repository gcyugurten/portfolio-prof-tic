@extends('layouts.dashboardLayout')



@section('content')

    <div class="bg-light">

        <div class="py-5">
            
            
            @if (!$errors->isEmpty())
                <div class="alert alert-danger p-3">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            
            @if (session('status'))
                <div class="alert alert-success p-3">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-6 mb-4">
                    <h1 class="special-heading pb-4">Paramétres</h1>
                    <form action="{{ route('dashboard.settings.update') }}" method="POST">

                        @csrf
                        <div class="form-group">
                            <label for="fullName">Nom complet</label>
                            <input type="text" name="fullName" placeholder="Nom complet" value="{{ $profile->fullName }}" class="form-control customized">
                        </div>
                      
                        <div class="form-group">
                            <label for="group">Groupe : </label>
                            <select name="group" id="group" class="form-control">
                                <option value="{{ $profile->group->id }}">{{ $profile->group->name }}</option>
                                @foreach ($available_groups as $group)
                                    @if ($group->id == $profile->group->id)
                                        @php
                                            continue;
                                        @endphp
                                    @else
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>                        
                                    @endif                            
                                @endforeach
                            </select>
                        </div>
        
                        <button type="submit" class="main-btn">
                            Sauvegarder
                        </button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h1 class="special-heading pb-4">Changer le <span>mot de passe</span></h1>
                    <form action="{{ route('dashboard.settings.update-password') }}" method="POST">

                        @csrf
                        <div class="form-group">
                            <label for="fullName">Mot de passe actuel</label>
                            <input type="password" name="curr_pass" placeholder="Mot de passe actuel" class="form-control customized">
                        </div>
                      
                        <div class="form-group">
                            <label for="fullName">Nouveau mot de passe</label>
                            <input type="password" name="password" placeholder="Nouveau mot de passe" class="form-control customized">
                        </div>
        
                        <div class="form-group">
                            <label for="fullName">Confirmer le nouveau mot de passe</label>
                            <input type="password" name="password_confirmation" placeholder="Confirmer le nouveau mot de passe" class="form-control customized">
                        </div>

                        <button type="submit" class="main-btn">
                            Sauvegarder
                        </button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection


