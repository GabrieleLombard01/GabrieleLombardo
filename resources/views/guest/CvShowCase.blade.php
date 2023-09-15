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
            <div class="row mt-5">
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

                <div class="col-12 col-md-6">
                    <h2>SKILLS & SOFTWARE</h2>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                        <div class="col-4">
                            <div class="skill-container"></div>
                            <div class="skill-text">test</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('includes.layout.footer')

@endsection
