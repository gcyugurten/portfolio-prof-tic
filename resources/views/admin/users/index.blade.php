@extends('layouts.adminLayout')

@section('content')
    <div class="float-left special-heading py-4">Liste des utilisateurs</div>

    <div class="py-4 float-right">
        <a href="{{ route('admin.user.create') }}" class="main-btn"><i class="fas fa-plus"></i> Nouvel utilisateur</a>
    </div>
    <table class="table products-table table-bordered table-respdonsive">
        <tr>
            <th>ID</th>
            <th>Avatar</th>
            <th>Nom complet</th>
            <th>Email</th>
            <th>Date d'inscription</th>
            <th>Groupe</th>
            <th>action</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <div class="avatar">
                        <img src="{{ asset('imgs/avatar-default.png') }}" alt="">
                    </div>
                </td>
                <td>{{ $user->fullName }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ Carbon\Carbon::parse($user->created_at)->isoFormat("lll") }}</td>
                <td>
                    @if ($user->group)
                        <span class="group">{{ $user->group->name }}</span>
                    @else 
                        /
                    @endif
                </td>

                <td class="edit">
                    <form action="{{ route('admin.user.delete', ['id' => $user->id ]) }}" method="POST">
                        @csrf
                        <a href="{{ route('admin.user', ["id" => $user->id]) }}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                        <button type="submit" class="btn btn-danger return-confirm"> <i class="fas fa-trash"></i> </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">/</td>
            </tr>
        @endforelse
        
    </table>

@endsection

