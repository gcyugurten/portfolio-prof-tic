@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">

@endsection


@section('content')
    
    @include('partials.navbar')

    <div class="container blog-post py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="website-path py-3">
                    <a href="{{ route('index-page') }}">Accueil</a> > <a href="{{ route('blog') }}">Blog</a> > <a href="">{{ $post->title }}</a>
                </div>
                <h1 class="special-heading pb-2">{{ $post->title }}</h1>
                
                <div class="author-and-date pb-5">
                    <span class="author">
                        <i class="fas fa-user"></i> 
                        Zahira Chouiref
                    </span>
                    <span class="date">
                        <i class="far fa-clock"></i>
                        {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                    </span>
                </div>

                <p>
                    {!! $post->content !!}
                </p>

            </div>
        </div>
    </div>

    <div class="border-top">
        @include('partials.footer')
    </div>

@endsection





