@extends('layouts.adminLayout')


@section('content')
    <div class="special-heading py-4" >Dashboard <span>Summary</span> :</div>

    <div class="stats pb-5">
        <div class="row">
            
            <div class="col-md-4 col-sm-6 col-12">
                <div class="stat-box bg-clr-4">
                    <div class="row">
                        <div class="col-4 text-center">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-8">
                            <div class="value">{{ count($users) }}</div>
                            <div class="txt">Total des utilisateurs</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="stat-box bg-clr-2">
                    <div class="row">
                        <div class="col-4 text-center">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <div class="col-8">
                            <div class="value">{{ $count_posts }}</div>
                            <div class="txt">Total d'articles</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="stat-box bg-clr-3">
                    <div class="row">
                        <div class="col-4 text-center">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="col-8">
                            <div class="value">{{ Helper::seens_count() }}</div>
                            <div class="txt">Total des vues d'articles</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="today-workingTime">
        <div class="special-heading py-3">Program d'aujourd'hui :</div>
        <table class="table table-bordered">
            <tr>
                <th>Groupe</th>
                <th>Heure de début</th>
                <th>Heure de fin</th>
                <th>action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @forelse ($days as $day)
                @if (\Carbon\Carbon::now()->englishDayOfWeek == Helper::en_day($day->day))
                    @php
                        $i++;
                    @endphp
                    <tr>
                        <td class="group ml-3 mt-2">{{ $day->group->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($day->start_time)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($day->end_time)->format('H:i') }}</td>
                        <td>
                            @if ( strtotime($day->start_time) - strtotime(date("H:i:s")) <= 0)  
                            {{-- @if ( strtotime($day->start_time) - strtotime(date("H:i:s")) <= 0 && strtotime($day->end_time) - strtotime(date("H:i:s")) > 0)   --}}
                                @if(Helper::lastStream($day->group->id) && \Carbon\Carbon::parse(Helper::lastStream($day->group->id)->created_at)->format("Y-m-d") == date("Y-m-d"))
                                    @if(boolval(Helper::lastStream($day->group->id)->deprecated))
                                        <strong style="color: rgb(56, 170, 170)">Video abondonnée</strong>
                                    @else
                                        <strong style="color: rgb(23, 146, 105)"> <i class="fas fa-check"></i> Le cours d'aujourd'hui est términé </strong>                
                                    @endif
                                @else 
                                    @if(Helper::streamInProgress($day->group->id))
                                        <form method="POST" action="{{ route('streaming.deprecate', ['stream_id' => Helper::streamInProgress($day->group->id)->id]) }}">
                                            @csrf

                                            <button type="submit" style="background:none; border:none; font-weight:bold; color:rgb(138, 7, 7); text-decoration:underline">Abondonner la vidéo</button>
                                        </form>
                                        
                                    @else
                                        @if (strtotime($day->end_time) - strtotime(date("H:i:s")) <= 0)
                                            <span class="status danger">Trop tard</span> &nbsp;
                                        @else 
                                        {{-- @if(strtotime($day->start_time) - strtotime(date("H:i:s")) <= 0) --}}
                                            <form method="POST" action="{{ route('start-streaming', ['id' => $day->group->id]) }}">
                                                @csrf

                                                <button type="submit" class="btn btn-success">Commencer le cours</button>
                                            </form>
                                        @endif
                                        
                                    @endif
                                        
                                @endif
                            @else                                
                                Attendez jusqu'a {{ \Carbon\Carbon::parse($day->start_time)->format('H:i') }}..
                            @endif
                        </td>
                    </tr>
                @endif
  
            @empty
                <tr>
                    <td colspan="4">/</td>
                </tr>
            @endforelse
            @if ($i == 0)
                <tr>
                    <td class="text-center" colspan="4">/</td>
                </tr>
            @endif

        </table>
    </div>

@endsection

