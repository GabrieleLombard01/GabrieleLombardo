@extends('layouts.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/jumbo_1.png') }}" class="blurred-border d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/jumbo_2.png') }}" class="blurred-border d-block w-100" alt="jumbo">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/jumbo_3.png') }}" class="blurred-border d-block w-100" alt="jumbo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--BIO-->
    <div class="bio_home_container">
        <div class="container">
            <h1 class="text-center pt-1">WELCOME</h1>
            <div class="row justify-content-center ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center ">
                    <img class="mt-4 img-fluid" src="{{ asset('images/MyPhoto.png') }}" alt="myphoto">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-5">
                    <h3 class="pt-4">Sono un ragazzo di Torino, classe 2001 con la passione per lo sviluppo web!</h3>
                    <h3 class="pt-4">Dopo il diploma, ho frequentato il corso per Jr Full Stack di Boolean academy.</h3>
                    <h3 class="pt-4">Ho tanta voglia di imparare e di crescere in questo settore,<br> al momento sono alla
                        ricerca di una prima occupazione</h3>
                </div>
            </div>
        </div>

        <!--SKILL-->
        <div class="skill_home_container">
            <div class="row p-3">
                @forelse ($skills as $skill)
                    <div class="pt-4 pb-4 col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                        <img width="50px" src="{{ $skill->image }}" alt="{{ $skill->title }}">
                    </div>
                @empty
                    <h5>no skills</h5>
                @endforelse
            </div>
        </div>




    </div>




    @include('includes.layout.footer')
@endsection
