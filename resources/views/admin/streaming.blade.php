@extends('layouts.mainLayout')

@section("styles")
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">
@endsection

@section('metaTags')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
@endsection

@section('content')




    <div class="container">
        <a href="{{ route('admin.dashboard') }}" class="mt-5 btn btn-success"><i class="fas fa-angle-left"></i> Retour</a>
        <h1 class="special-heading pb-4 text-center" >Commencer le cours du groupe {{ $group->name }}</h1>

        <div id="wait" class="text-center m-auto">
            <div class="lds-facebook"><div></div><div></div><div></div></div>
        </div>

        <div class="text-center">
            <button id="leave" data-link="{{ route('streaming.end', ["id" => $group->id]) }}" class="btn d-none btn-danger">Arreter le cours</button>
        </div>

        <div class="row py-3">
            <div class="col-md-8">
                <div class="stream-video">
            
                    <div class="text-center">
                        <div id="video">
                            <video style="height: 335px" class="w-100" controls></video>
                            <button data-link="{{ route('streaming.save-token', ["id" => $group->id]) }}" class="main-btn" type="button" id="host-join">Commencer le cours</button>

                        </div>
                        

                    </div>   
                </div>
            </div>
            <div class="col-md-4">

                <div class="conversation" id="conversation" style="background: #fff; border:1px solid #ccc; height: 335px">

                    <div class="conversation-header">
                        Conversation ({{ $group->users->count() }} users)
                    </div>
                    
                    
                </div>
             

            </div>
        </div>

    </div>

@endsection


@section('scripts')
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    @php
        $channel = sha1(time());
    @endphp
    <script>
        
        let options = {
            // Pass your app ID here.
            appId: "0ec8c79b7d384bdf834b597a8c130267",
            // Set the channel name.
            channel: "{{ $channel }}",
            // Use a temp token
            token: "{{ Helper::GetAgoraToken(0, $channel) }}",
            // Uid
            uid: 0
        };
    </script>


    <script>
        
        var messageBox = document.getElementById('conversation');
        var interval = setInterval(() => {
            

            $.ajax({
                url: "{{ route('admin.messages.get') }}",
                method: "GET",
                dataType: "json",
                success: function(result) {
                    
                    if(Object.keys(result).length > 0) {
                        Object.entries(result).forEach((res) => {

                            const [key, val] = res;

                            var div = document.createElement('div'),
                                username = document.createElement('div'), 
                                comment = document.createElement('div');

                            div.setAttribute('class', "messages messages--received");
                            username.setAttribute('class', "username");
                            username.innerHTML = val.fullName;
                            div.appendChild(username);


                            comment.setAttribute('class', "message");
                            comment.innerHTML = val.message;

                            
        
                            div.appendChild(comment);
                            messageBox.appendChild(div);

                            document.querySelector('.conversation').scrollTop = document.querySelector('.conversation').scrollHeight;
                        });
                    

                    }
                    
                }
            });

        }, 1000);
        

    </script>

    

    


@endsection