@extends('layouts.mainLayout')


@section('content')


    @include('elearning.partials.upper-nav')

    <div class="bg-light">

        <h1 class="special-heading pt-5 pb-3 text-center" style="font-size: 28px;">Salut <span>{{ auth()->user()->fullName }}</span> !</h1>
        <p class="p-content text-center container" style="font-size: 15px;">
            <b style="font-size: 20px;">Première étape (1) :</b> Vous devez sélectionner un groupe avec lequel vous souhaitez étudier
        </p>


       


        <div class="groups bg-light py-5">
            <div class="container">
                <div class="row">
                    
                    @foreach ($groups as $group)
                        <div class="col-md-3">
                            <div class="group-box" style="box-shadow: 1px 1px 10px rgb(224, 224, 224)">
                                <div class="img">
                                    {{ $group->name }}
                                    {{-- <img src="{{ asset('imgs/group-a-letter.png') }}" alt=""> --}}
                                </div>
                                <h3 class="special-heading">Groupe <span>{{ $group->name }}</span></h3>
                                <table class="mt-4 table table-bordered" style="margin-bottom: 0">
                                    <tr>
                                        <th>Jour</th>
                                        <th>Temps</th>
                                    </tr>
                                    @forelse ($group->days as $day) 
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
                                    @empty 
                                        <tr>
                                            <td colspan="2">/</td>
                                        </tr>
                                    @endforelse
                                    
                                    
                                </table>

                                <a style="margin-top: 0; border-radius: 0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;" href="{{route('join-group.select', ['id' => $group->id])}}" class="main-btn btn-block btn">Adhérer</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>



    </div>


@endsection
