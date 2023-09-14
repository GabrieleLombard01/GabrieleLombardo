@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Curriculum
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">CV</div>

                    <div class="card-body">
                        <h2>Modifica...</h2>
                        <button><a href="{{ url('admin/experiences') }}">Esperienze</a></button>
                        <button><a href="{{ url('admin/instructions') }}">Istruzione</a></button>
                        <button><a href="{{ url('admin/skills') }}">Skills</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
