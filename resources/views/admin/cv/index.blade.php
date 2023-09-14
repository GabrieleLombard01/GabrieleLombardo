@extends('layouts.app')

@section('title', 'Cv')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Curriculum
        </h2>
        <hr>
        <h5 class="fs-4 text-secondary my-4">
            Quale sezione vorresti modificare?
        </h5>
        <div class="cv_container flex-wrap justify-content-center d-flex ">
            <div class="col-12 col-sm-6 col-md-3 p-3">

                <div class="card mx-auto">
                    <a class="mx-auto" href="{{ url('admin/experiences') }}"><img class="img-fluid"
                            src="{{ asset('images/zaino.jpg') }}" alt="Experience"></a>
                    <div class="card-body">
                        <a href="{{ url('admin/experiences') }}">
                            <h5 class="text-center">Esperienze</h5>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-3 p-3">

                <div class="card mx-auto">
                    <a class="mx-auto" href="{{ url('admin/instructions') }}"><img class="img-fluid"
                            src="{{ asset('images/portapenne.jpg') }}" alt="Instruction"></a>
                    <div class="card-body">
                        <a href="{{ url('admin/instructions') }}">
                            <h5 class="text-center">Istruzione</h5>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-3 p-3">

                <div class="card mx-auto">
                    <a class="mx-auto" href="{{ url('admin/skills') }}"><img class="img-fluid"
                            src="{{ asset('images/cervello.jpg') }}" alt="Skills"></a>
                    <div class="card-body">
                        <a href="{{ url('admin/skills') }}">
                            <h5 class="text-center">Competenze</h5>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

{{-- <button><a href="{{ url('admin/experiences') }}">Esperienze</a></button>
    <button><a href="{{ url('admin/instructions') }}">Istruzione</a></button>
    <button><a href="{{ url('admin/skills') }}">Skills</a></button> --}}
