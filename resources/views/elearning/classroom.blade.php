@extends('layouts.dashboardLayout')



@section('content')

    <div class="bg-light">

        <div class="py-5">

            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-center special-heading pb-3">Membres du groupe</h1>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nom complet</th>
                            <th>Date d'adhésion</th>
        
                        </tr>
                        @forelse ($classroom as $user)
                            <tr>
                                <td> {{ $user->fullName }} </td>
                                <td> {{ \Carbon\Carbon::parse($user->created_at)->isoFormat('ll') }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">/</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
                <div class="col-md-5" id="studying-times">
                    <h1 class="text-center special-heading pb-3">Temps d'étude</h1>
                    <table class="table table-bordered">
                        <tr>
                            <th>Jour</th>
                            <th>Temps</th>
                        </tr>
                        @forelse ($days as $day)
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
                                <td class="text-center" colspan="2">/</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
            
            


        </div>

    </div>
@endsection



