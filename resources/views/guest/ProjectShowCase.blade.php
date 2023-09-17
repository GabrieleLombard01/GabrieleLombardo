@extends('layouts.app')
@section('title', 'Progetti')

@section('content')
    <div class="jumbo_projects">
        <div class="title-pr">PROGETTI</div>
    </div>

    <div class="container p-0 mb-max-p">

        <h1 class="fw-max text-center pt-5 pb-3">Alcuni dei miei lavori...</h1>
        <div class="orange_hr"></div>


        <div class="row mb-4">
            @forelse ($projects as $project)
                <div class="col-12 col-sm-6 col-md-4 mt-4">
                    <div class="card p-4 rounded-3 ">
                        <img class="rounded-3 shadow" src="{{ $project->image }}">
                        <div class="card-body">
                            <h2 class="text-orange mb-2">{{ $project->title }}</h2>
                            <span class="pe-2"><strong>Creato il:</strong></span>
                            <small class="d-block">{{ $project->created_at }}</small>
                            <span class="d-block pe-2"><strong>Modificato il:</strong></span>
                            <small class="d-block">{{ $project->updated_at }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <hr>
                <h2 class="text-center pt-4 pb-4">Nessun progetto</h2>
                <hr>
            @endforelse
        </div>

    </div>
    @include('includes.layout.footer')

@endsection
