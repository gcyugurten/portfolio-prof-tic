@extends('layouts.mainLayout')



@section('content')


    @include('elearning.partials.upper-nav')
    <style>
        table tr:first-child {
            background: rgb(238, 238, 238)
        }
        table tr th, table tr td {
            padding: 17px 10px !important
        }
    </style>
    <div class="bg-light join-group">
        <div class="client-path py-4">
            <div class="container">
                <a href="{{ route('home') }}">Dashboard</a> / <a href="">Join the group <b>{{ $group->name }}</b></a>
            </div>
        </div>
        <div class="container py-5">

            @if (!$errors->isEmpty())
                <div class="alert alert-danger p-3">
                    @foreach ($errors->all() as $error)
                        <div style="list-style: none">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="row justify-content-center">
                
                <div class="col-md-8">

                    <h1 class="special-heading pb-4" style="font-size: 37px;">Adhérer au <span>group {{ $group->name }}</span> </h1>
                    <h1 class="special-heading" style="font-size: 20px;">Temps d'étude</h1>


                    <table class="table table-bordered my-4">
                        <tr>
                            <th>Jour</th>
                            <th>Temps</th>
                        </tr>
                        @foreach ($group->days as $day) 
                            <tr>
                                <td>{{ $day->day }}</td>
                                <td>
                                    <?php
                                        $start = strtotime($day->start_time);
                                        echo date('H:i', $start).' - ';
                                        $end = strtotime($day->end_time);
                                        echo date('H:i', $end);
                                    ?>
                                    
                                </td>
                                
                            </tr>
                        @endforeach
                    </table>

                    <form action="{{ route('join-group.confirm', ['id' => $group->id]) }}" method="POST">
                        @csrf
                        <button class="main-btn" type="submit">Adhérer maintenant</button>
                    </form>

                    
                    

                    
                </div>
            </div>

        
        </div>
        

    </div>

    <div class="border-top">
        @include('partials.footer')
    </div>


@endsection








