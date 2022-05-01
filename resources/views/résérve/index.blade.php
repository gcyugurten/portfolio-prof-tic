@extends('layouts.mainLayout')

@section('metaTags')
    <meta name="description" content="{{ Helper::settings()->description }}">
    <meta keywords="{{ Helper::settings()->tags }}">

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')
    
    <header class="main-header">
        @include('partials.navbar')
        <div class="header-content py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="header-quot">
                            Learn <span>QURAN</span> Online !
                        </h1>
                        <p class="p-content py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores dignissimos unde in. Fuga praesentium cumque officiis tempora repellendus, quae sit blanditiis labore explicabo voluptate, aspernatur magnam totam itaque libero et?</p>
                        
                        <a href="{{ route('register') }}" class="main-btn">Join & Start learning Now &nbsp; <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-md-5">
                        <div class="header-img d-sm-block d-none">
                            <img src="{{ asset('imgs/quran-side.png') }}" class="active w-100" alt="">
                            <img src="{{ asset('imgs/quran-h.png') }}" class="w-100" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f4f4f4" fill-opacity="1" d="M0,128L1440,0L1440,0L0,0Z"></path></svg>



    {{-- <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="special-heading pb-4">About the <span>Academy</span></h1>
                    <p class="p-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ut voluptatum veniam libero, numquam consequuntur eligendi! Repudiandae cumque nobis quidem optio! Harum delectus tempora provident quasi dignissimos corporis praesentium numquam.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="img">
                        <img src="{{ asset('imgs/quran-illustration.jpg') }}" alt="" class="w-100 img-radius">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="courses bg-light" id="courses" style="margin-top: 7rem;">
        <div class="container">
            <h1 class="special-heading text-center py-5">What will you <span> learn </span>?</h1>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="course">
                        <div class="img">
                            <img class="w-100" src="{{ asset('imgs/quran-xx.jpg') }}" alt="">
                        </div>
                        <div class="course-content">
                            <h3 class="heading">Hifdh Al Quran</h3>
                            <p class="p-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolore tempora rem exercitationem eligendi sed veniam ullam deserunt recusandae? Sed debitis distinctio harum qui modi nisi voluptatem ipsum explicabo iure.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="course">
                        <div class="img">
                            <img class="w-100" src="{{ asset('imgs/quran-cover.png') }}" alt="">
                        </div>
                        <div class="course-content">
                            <h3 class="heading">Hifdh Al Quran</h3>
                            <p class="p-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolore tempora rem exercitationem eligendi sed veniam ullam deserunt recusandae? Sed debitis distinctio harum qui modi nisi voluptatem ipsum explicabo iure.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="course">
                        <div class="img">
                            <img class="w-100" src="{{ asset('imgs/quran-white.jpg') }}" alt="">
                        </div>
                        <div class="course-content">
                            <h3 class="heading">Hifdh Al Quran</h3>
                            <p class="p-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolore tempora rem exercitationem eligendi sed veniam ullam deserunt recusandae? Sed debitis distinctio harum qui modi nisi voluptatem ipsum explicabo iure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,128L1440,0L1440,0L0,0Z"></path></svg> --}}


    <div class="plans pb-5" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="special-heading">
                        <span>Pricing</span> & Payment methods 
                    </h1>
                    <p class="p-content py-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ratione minima doloribus, magnam quis saepe illo. Quibusdam delectus totam eveniet corrupti placeat aspernatur cupiditate eum maiores, hic accusamus perspiciatis magnam.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="plan p-4">
                        <div class="special-heading"><span>
                            @if ( Helper::settings()->subscription_price )
                                {{ Helper::settings()->subscription_price }} $
                            @else
                                {{ env('SUBSCRIPTION_PRICE') }} $
                            @endif    
                        </span></div>
                        <ul class="features p-4">
                            <li>
                                <i class="fas fa-check"></i>
                                <b>9h</b> per week
                            </li>
                            <li>
                                <i class="fas fa-check"></i> 
                                Learn with practise
                            </li>
                            <li>
                                <i class="fas fa-check"></i> 
                                Full support
                            </li>
                        </ul>
                        <a href="" class="main-btn text-center d-block">Join Now !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-devider">
        <div class="overlay"></div>
    </div>




    <div class="contact py-5">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="panel uhp" style="transform: translateY(-150px)">
                            <h1 class="special-heading py-5"><span>Contact</span> Us for more details</h1>
                            <div class="panel-body">
                                <form id="contact-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name" required name="fullName" class="form-control" required> 
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" required name="email" class="form-control" required> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea placeholder="Mesasage" name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <input type="submit" value="Send" class="btn-block main-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="contact-infos py-md-4 pb-4">
                            <div class="panel">
                                <div class="box">
                                    <div class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="link">
                                        <a href="https://www.facebook.com/QNETMENA/">FB account</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box">
                                    <div class="icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div class="link">
                                        <a href="https://www.instagram.com/qnetofficial/">INSTA</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box">
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="link">
                                        +213 5 59 47 48 12
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div> 

                    </div>  --}}
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')

@endsection



@section('scripts')
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script> 
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

