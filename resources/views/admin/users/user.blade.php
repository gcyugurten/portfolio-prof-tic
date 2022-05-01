@extends('layouts.adminLayout')


@section('content')
    <div class="special-heading py-4">Edit {{ $user->fullName }}</div>

    @if (!$errors->isEmpty())
        <div class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <div style="list-style: none">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.user.update', ["id" => $user->id]) }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="full-name">Nom complet :</label>
            <input name="fullName" type="text" value="{{ $user->fullName }}" placeholder="Nom complet" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input id="email" name="email" type="text" value="{{ $user->email }}" placeholder="Email" class="form-control customized">
        </div>

        <div class="form-group">
            <label for="group">Groupe :</label>

            <select name="group" class="form-control" name="group" id="group">
                <option value="0">...</option>
                @foreach ($groups as $group)
                    <option {{ ($user->group_id && $user->group_id == $group->id) ? "selected" : "" }} value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Enregistrer" class="main-btn">
    </form>

@endsection


