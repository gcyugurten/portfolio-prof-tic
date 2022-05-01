@extends('layouts.adminLayout')


@section('content')
    <div class="special-heading py-4">Créer un nouvel utilisateur</div>

    @if (!$errors->isEmpty())
        <div class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <div style="list-style: none">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.user.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="full-name">Nom complet :</label>
            <input name="fullName" type="text" placeholder="Nom complet" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input id="email" name="email" type="text" placeholder="user@mail.com" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="password">Créer un mot de passe :</label>
            <input id="password" name="password" type="password" placeholder="Creér un mot de passe" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmer le mot de passe" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="group">Groupe :</label>
            <select name="group" class="form-control" name="group" id="group">
                <option value="0">...</option>
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Enregistrer" class="main-btn">

    </form>

@endsection


