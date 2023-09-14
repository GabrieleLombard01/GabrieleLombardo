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
                        SKILLS
                        <button><a href="{{ url('admin/cv') }}">Torna in dietro</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
