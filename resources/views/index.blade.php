@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">

@endsection


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
@endsection

@section('content')
    
    <header class="main-header">
        @include('partials.navbar')
        <div class="overlay">
            <div class="header-content">
                <div class="container">
              
                    <div class="py-5 header-text">
                        <div class="container">
                            <h1 class="header-quot" data-aos="fade-up">
                                Je m'appelle
                                <span>Zahira Chouiref.</span>
                            </h1>
                            <h1 data-aos="fade-down" data-type-speed="100" data-type-delay="200" data-remove-speed="50"data-remove-delay="500" class="header-quot animate-typing" style="font-size: 18px !important; font-style:italic">
                                Enseignante-chercheuse.
                                | Maitre de conférences
                                | Membre de laboratoire LIMPAF
                            </h1>
                            <p class="p-content py-4" data-aos="fade-down" style="color: rgb(99, 99, 99)">
                                Maitre de conférences à l’université de <strong style="color: #000">Bouira.</strong> <br>
    Enseignante au département d’informatique <br> Membre de laboratoire LIMPAF

                                
                            </p>
                            
                            <a href="{{ route('a-propos') }}" data-aos="fade-right" class="main-btn">Découvrir plus <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </header>


    <section class="experiences py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="special-heading" data-aos="fade-up">Experiences <span>Professionnels</span></h1>
                    <p class="pt-4" data-aos="fade-down">
                        <b> Actuellement :</b> Je suis en poste d’enseignante-chercheuse permanente à l’université de Bouira avec le grade de maître de conférences de classe B. J’enseigne divers modules tels que Système d’aide à la décision, Intelligence artificielle, Intelligence computationnelle, Algorithmique et structures de données à des niveaux différents (L3, M1, M2, L1). 

                    </p>
                    <div class="d-md-block d-none">
                        <a data-aos="fade-down" href="{{ route('a-propos') }}" class="main-btn">Lire plus ..</a>
                        <a data-aos="fade-up" href="https://docs.google.com/document/d/1zh10x42n2BlTW0Zl5F4yTAC2e5MoyG4B/edit?usp=sharing&ouid=102943991836178139352&rtpof=true&sd=true" target="_blank" class="main-btn-transparent text-center">Télécharger le CV</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="career pt-4">

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5" data-aos="fade-down">
                                <div class="title">Enseignante vacataire à l’université Mh’amed Bouguera-Boumerdes, Algérie</div>
                                <div class="date"><i class="far fa-clock"></i> 2005 > 2009</div>
                            </div>
                        </div>

                        

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5" data-aos="fade-up">
                                <div class="title">Maitre-assistant à l’université de Bouira, Algérie</div>
                                <div class="date"><i class="far fa-clock"></i> 2009 > 2017</div>
                            </div>
                        </div>

                        

                       

                        <div class="item">
                            <div class="float-start">
                                <span class="circle"></span>
                                <div class="item-devider"></div>
                            </div>
                            <div class="career-content ps-5" data-aos="fade-down">
                                <div class="title">Maitre de conférences à l’université de Bouira, Algérie</div>
                                <p class="description">
                                    Enseignante au département d’informatique ; Membre de laboratoire LIMPAF.
                                </p>
                                <div class="date"><i class="far fa-clock"></i> Avril 2017 > Novembre 2021 </div>
                            </div>
                        </div>


                        <div class="d-md-none d-block" style="margin-top: 5rem">
                            <a data-aos="fade-up" href="{{ route('a-propos') }}" class="text-center d-block main-btn mb-2">Lire plus ..</a>
                            <a data-aos="fade-down" href="https://docs.google.com/document/d/1zh10x42n2BlTW0Zl5F4yTAC2e5MoyG4B/edit?usp=sharing&ouid=102943991836178139352&rtpof=true&sd=true" target="_blank" class="d-block main-btn-transparent text-center">Télécharger le CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills">
        <div class="overlay py-5">
            <div class="container">
                <h1 class="special-heading text-center py-5" data-aos="fade-down">Connaissances <span>techniques</span>  et <span>méthodologiques</span> </h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill-box text-center">
                            <h3 class="title">Outils</h3>
                            <div class="items">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/bureautique.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/frontpage.png') }}" alt="">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/photoshop.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/vs.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box text-center">
                            <h3 class="title"> Langages de programmation & BD</h3>
                            <div class="items">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/python.png') }}" alt="">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/js.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/php_mysql.png') }}" alt="">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/cpp.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/delphi.svg') }}" alt="">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/pascal.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/vb.webp') }}" alt="">
                                <img data-aos="fade-dpwn" src="{{ asset('imgs/techs/vba.svg') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/matlab.png') }}" alt="">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/latex.png') }}" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="skill-box text-center">
                            <h3 class="title">Méthodes de modélisation </h3>
                            <div class="items">
                                <img data-aos="fade-down" src="{{ asset('imgs/techs/merise.png') }}" alt="">
                                <img data-aos="fade-up" src="{{ asset('imgs/techs/uml.png') }}" alt="">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="articles py-5">
        <div class="container pb-4">
            <div class="pb-4 pt-5">
                <h1 class="special-heading float-start" data-aos="fade-left">Quelque <span>articles</span> écrit par moi :</h1>
                <a data-aos="fade-right" href="{{ route('blog') }}" style="font-size: 18px; font-weight: bold" class="float-end d-inline-block">Voir plus d'articles ..</a> 
                <div class="clearfix"></div>

            </div>
            
            <div class="row" data-aos="fade-up">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="article mb-3" >
                            {{-- <div class="post-thumb">
                                <img class="w-100" src="{{ asset('imgs/blog-post.jpg') }}" alt="">
                            </div> --}}
                            <div class="summary">
                                <div class="title pb-3">
                                    <a href="{{ route('show_article', ["slug" => $post->slug]) }}"> 
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
        </div>
    </section>


    <section class="online-teaching">
            <div class="row mx-0">
                <div class="col-md-6 px-0 d-md-block d-none" style="overflow: hidden">
                    <img data-aos="fade-left" style="min-height: 100%; min-width: 100%" src="{{ asset('imgs/bg.webp') }}">
                </div>
                <div class="col-md-6 py-5">
                    <div class="container">
                        <h1 data-aos="fade-right" class="special-heading pb-3">Je donne des cours de <span>soutiens </span>en ligne</h1>
                        <p data-aos="fade-down">
                            Vous etes les bienvenues a nous rejoindre , le développement de notre société est la résponsabilité de chacun de nous
                        </p>
                        <div class="features">
                            <div class="feature-item" data-aos="fade-down">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Vous ne payerez rien
                                </div>
                            </div>
                            <div class="feature-item" data-aos="fade-up">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Vous apprenez chez vous
                                </div>
                            </div>
                            <div class="feature-item" data-aos="fade-down">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    Des formations de qualités seront donnée
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="contact py-5">
        <div class="container">
            <h1 class="special-heading text-center py-3 pb-5">Contactez<span>-moi</span></h1>
            <div class="row">
                <div class="col-md-6">
                    {{-- <div class="d-flex pb-3">
                        <div class="icon pr-3">
                            <img style="max-width: 100%" src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/50/000000/external-location-communication-and-media-flatart-icons-flat-flatarticons.png"/>
                        </div>
                        <p style="font-size: 14px">
                            Université Akli Mohand Oulhadj <br>
                            Faculté des sciences et des sciences appliquées <br> 
                            Département d'informatique, bureau n°3.
                        </p>
                    </div> --}}
                    <map>
                        <iframe data-aos="fade-left" class="mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.296883869069!2d3.874558214386162!3d36.377806399063374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128c2f88be202109%3A0xce78f9b0040abea8!2sUniversity%20Pole!5e0!3m2!1sen!2sdz!4v1649182054118!5m2!1sen!2sdz" width="100%" height="420" style="border:1px solid #ccc;" allowfullscreen="" loading="lazy" ></iframe>
                        
                    </map>
                </div>
                <div class="col-md-6">
                    <div class="form" id="contact">
                        @if(Session::has('success'))
                            <div class="alert alert-success py-3 mb-2">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        <form method="POST" action="" autocomplete="off">
                            <div class="form-group" data-aos="fade-down">
                                <input type="text" name="full_name" autocomplet="off" required class="input" placeholder="* Votre nom complét ..">
                                @if ($errors->has('full_name'))
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group" data-aos="fade-up">
                                <input type="email" name="email" required class="input" placeholder="* Votre address email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group" data-aos="fade-down">
                                <textarea placeholder="* Votre message .." name="message"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <button type="submit" data-aos="fade-right" class="main-btn d-block w-100">Envoyer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

@endsection


@section('scripts')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/animate_typing.js') }}"></script>

    <script>
        AOS.init()
    </script>

@endsection


