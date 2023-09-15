@extends('layouts.app')
@section('title', 'CV')
@section('content')
    <div class="cv-show-case">

        <div class="title-sc">CURRICULUM</div>

        <div class="container">

            <!--INTESTAZIONE-->
            <div class="photo_container mx-auto row justify-content-between align-items-center">
                <div class="col-12 col-md-5">
                    <div class="photo_contained">
                        <img class="img-fluid" src="{{ asset('images/MyPhoto.png') }}" alt="my-photo">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="text-center">HELLO WORLD!</h1>
                </div>
            </div>

            <!--BIO-->
            <div class="row justify-content-between  mt-5">
                <div class="col-12 col-md-6">
                    <p>Io sono <strong>Gabriele Lombardo</strong>, aspirante web developer junior.</p>
                    <p class="mt-1">Grande spirito di adattamento. Esperienze lavorative variegate (in campo
                        sociale come animatore per 5 anni o come aiutante in asili e scuole elementari, ma anche esperienze
                        manuali come Warehouse operative presso Decathlon Italia).</p>
                    <p class="mt-1">Diplomato e munito di patente. Ho sempre avuto la passione per la tecnologia, dopo il
                        diploma, ho acquistato il corso intensivo a tempo pieno per Full-stack: "Boolean". Attualmente cerco
                        un'occupazione come web developer junior, con l'obbiettivo di imparare cose nuove e crescere in
                        questo settore.</p>
                </div>

                <div class="col-12 col-md-5">
                    <h2 class="text-lg-center">SKILLS & SOFTWARE</h2>
                    <div class="row mt-4">
                        @forelse ($skills as $skill)
                            <div class="col-4 d-flex flex-column justify-content-center align-items-center ">
                                <div class="skill-container"><img width="96px" class="img-fluid" src="{{ $skill->image }}"
                                        alt="{{ $skill->title }}"></div>
                                <div class=" skill-text">{{ $skill->title }}</div>
                            </div>
                        @empty
                            <hr>
                            <h2 class="text-center pt-4 pb-4">Nessuna Competenza</h2>
                            <hr>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>

        <!--Esperienze-->
        <img width="100%" height="100px" class="mt-2" src="{{ asset('images/blu_wave-rnobg.png') }}" alt="jumbo">
        <div class="experience_jumbo"></div>
        <div class="container mt-5">
            <h2 class="fw-bold fs-1 pt-3">ESPERIENZE:</h2>
            <hr>
            @forelse ($experiences as $experience)
                <div class="mt-5 row justify-content-center ">
                    <div class="col-10 d-flex justify-content-between ">
                        <div class="col-5 col-md-3">
                            <img class="img-fluid rounded-3 box_shadow" src="{{ $experience->image }}" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul>
                                <li>
                                    <h2 class="text-orange">{{ $experience->title }}</h2>
                                </li>
                                <li>
                                    <h3 class="text-blue">{{ $experience->location }}</h3>
                                </li>
                                <li>
                                    <h4>{{ $experience->qualification }}</h4>
                                </li>
                                <li>
                                    <h5>{{ $experience->contract }}</h5>
                                </li>
                                <li>
                                    <span class="pe-2">Inizio:</span>
                                    <small>{{ $experience->start_date }}</small>
                                </li>
                                <li>
                                    <span class="pe-2">Fine:</span>
                                    <small>{{ $experience->end_date }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-10 pt-3">
                        <p>{{ $experience->description }}</p>
                        <hr>
                    </div>
                </div>
            @empty
                <hr>
                <h2 class="text-center pt-4 pb-4">Nessuna attività</h2>
                <hr>
            @endforelse

        </div>

        <img width="100%" height="70px" src="{{ asset('images/orange_wave-removebg.png') }}" alt="">
        <div class="instruction_jumbo mb-5"></div>

        <!--Istruzione-->
        <div class="container mt-5 mb-max">
            <h2 class="fw-bold fs-1 pt-5">Istruzione:</h2>
            <hr>
            @forelse ($instructions as $instruction)
                <div class="mt-5 row justify-content-center ">
                    <div class="col-10 d-flex justify-content-between ">
                        <div class="col-5 col-md-3">
                            <img class="img-fluid rounded-3 box_shadow" src="{{ $instruction->image }}" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul>
                                <li>
                                    <h2 class="text-orange">{{ $instruction->title }}</h2>
                                </li>
                                <li>
                                    <h3 class="text-blue">{{ $instruction->course_study }}</h3>
                                </li>
                                <li>
                                    <h4>{{ $instruction->qualification_study }}</h4>
                                </li>
                                <li>
                                    <h5>{{ $instruction->valuation }}</h5>
                                </li>
                                <li>
                                    <span class="pe-2">Inizio:</span>
                                    <small>{{ $instruction->start_date }}</small>
                                </li>
                                <li>
                                    <span class="pe-2">Fine:</span>
                                    <small>{{ $instruction->end_date }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-10 pt-3">
                        <p>{{ $instruction->description }}</p>
                        <hr>
                    </div>
                </div>
            @empty
                <hr>
                <h2 class="text-center pt-4 pb-4">Nessuna attività</h2>
                <hr>
            @endforelse

        </div>




    </div>
    @include('includes.layout.footer')

@endsection
