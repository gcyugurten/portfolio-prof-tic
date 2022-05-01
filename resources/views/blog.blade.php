@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">

@endsection


@section('content')
    
    @include('partials.navbar')

    <div class="blog articles pb-5">
        <div class="container">
            <h1 class="special-heading py-5">Mes <span>articles</span></h1>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="article mb-3">
                            {{-- <div class="post-thumb">
                                <img class="w-100" src="{{ asset('imgs/blog-post.jpg') }}" alt="">
                            </div> --}}
                            <div class="summary">
                                <div class="title pb-3">
                                    <a href="{{ route('show_article', ["slug" => $post->slug ]) }}"> 
                                        {{ $post->title }}
                                    </a>
                                </div>
                                <div class="author-and-date">
                                    <span class="author">
                                        <i class="fas fa-user"></i> 
                                        Zahira Chouiref
                                    </span>
                                    <span class="date">
                                        <i class="far fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                                    </span>
                                </div>
                                <p class="pt-4">
                                    {{ $post->summary }}
                                    <div>
                                        <a href="{{ route('show_article', ["slug" => $post->slug]) }}">Lire complet</a>
                                    </div>

                                </p>
                            </div>

                        </div>
                    </div>
                    
                @endforeach
            </div>

            <div class="pagination pt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <div class="border-top">
        @include('partials.footer')
    </div>

@endsection



