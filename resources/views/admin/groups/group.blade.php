@extends('layouts.adminLayout')


@section('content')

    @if (!$errors->isEmpty())
        <div class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <div style="list-style: none">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="alert alert-warning py-3 my-4">
        To add user to this group you should go to the users page ad edit his informations
    </div>
    <div class="special-heading">Edit group {{ $group->name }} settings</div>
    

    <div class="popup-bg"></div>

    @foreach ($group->days as $day)
        <div id="edit-workingTime-{{$day->id}}" class="popup">
            <div class="close">x</div>
            <form action="{{route('admin.group.edit-working-time', ['id' => $day->id])}}" method="POST"> 
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="day">Jour :</label>
                            <select name="day" id="day" class="form-control">
                                @foreach (['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'] as $ass)
                                    <option @if($day->day == $ass) {{ "selected" }} @endif value="{{ $ass }}">{{ $ass }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="startTime">Heure de début</label>
                            <input type="time" value="{{$day->start_time}}" placeholder="Choisir l'heure de début" name="startTime" id="startTime" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="startTime">Heure de fin</label>
                            <input value="{{$day->end_time}}" type="time" placeholder="Choisir l'heure de fin" name="endTime" id="endTime" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="main-btn" value="Enregistrer">
                </div>
            </form>
        </div>  
    @endforeach
    


    <div id="add-workingTime" class="popup">
        <div class="close">x</div>
        <form action="{{route('admin.group.add-working-time', ["id" => $group->id])}}" method="POST"> 
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="day">Jour :</label>
                        <select name="day" id="day" class="form-control">
                            @foreach (['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'] as $day)
                                <option value="{{ $day }}">{{ $day }}</option>
                                
                            @endforeach
                            
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="startTime">Heure de début</label>
                        <input type="time" placeholder="Choisir l'heure de début" name="startTime" id="startTime" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="startTime">Heure de fin</label>
                        <input type="time" placeholder="Choisir l'heure de fin" name="endTime" id="endTime" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="main-btn" value="Enregistrer">
            </div>
        </form>
    </div>  


   

    

    <form action="{{ route('admin.group.update', ["id" => $group->id]) }}" method="POST">

        @csrf
        <div class="form-group">
            <label for="maxMembers">Max des membres</label>
            <input type="number" name="max_members" id="maxMembers" placeholder="Max members" value="{{ $group->max_members }}" class="form-control">
        </div>

        <input type="submit" value="Save" class="main-btn">
    </form>

    <div class="times pt-5">
        <h1 class="special-heading float-left">Temps d'étude</h1>
        <div class="float-right">
            <a href="#" class="show-popup" data-show="add-workingTime"><i class="fas fa-plus"></i> Add new day</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Jour</th>
                <th>Heure de début</th>
                <th>Heure de fin</th>
                <th>action</th>
            </tr>
            @forelse ($group->days as $day)
                <tr>
                    <td>{{ $day->day }}</td>
                    <td>{{ $day->start_time }}</td>
                    <td>{{ $day->end_time }}</td>
                    <td>
                        <form action="{{route('admin.group.delete-working-time', ['id' => $day->id])}}" method="POST">
                            @csrf
                            <a href="#" class="show-popup" data-show="edit-workingTime-{{$day->id}}">edit</a>
                            <input type="submit" value="delete" style="color:red; background:none; border:0" class="return-confirm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">/</td>
                </tr>
            @endforelse
        </table>
    </div>

    <div class="users py-5">
        
        <h1 class="special-heading py-3">Les utilisateurs qui sont adhérés à ce groupe</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nom complet</th>
                <th>Email</th>
                <th>action</th>
            </tr>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->fullName }}</td>
                    <td>{{ $user->email }}</td>
                
                    <td>
                        <form action="{{ route('admin.delete-user-from-group', ["userId" => $user->id]) }}" method="POST">
                            @csrf
                            <input style="color: #b50404; background:none; border:0" type="submit" value="Supprimer du groupe">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="alert alert-danger py-3 my-4">Ce groupe n'a pas encore des utilisateurs adhérés</div>
                        
                    </td> 
                </tr>
            @endforelse
        </table>
    </div>

@endsection



