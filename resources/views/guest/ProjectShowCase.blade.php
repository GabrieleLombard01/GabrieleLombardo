@extends('layouts.app')
@section('title', 'Progetti')

@section('content')
    <div class="jumbo_projects"></div>

    <div class="container mb-max-p">

        <h1 class="fw-max text-center pt-5 pb-3">Alcuni dei miei lavori...</h1>

        @forelse ($projects as $project)
            <div class="mt-5 row justify-content-center ">
                <div class="col-10 d-flex flex-column flex-sm-row align-items-center justify-content-between ">
                    <div class="col-5 mb-3 mb-sm-none col-md-3">
                        <img class="img-fluid ms-md-4 rounded-3 box_shadow" src="{{ $project->image }}" alt="progetto">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul>
                            <li>
                                <h2 class="text-orange">{{ $project->title }}</h2>
                            </li>
                            <li>
                                <h3 class="text-blue">{{ $project->slug }}</h3>
                            </li>
                            <li>
                                <span class="pe-2">Creato il:</span>
                                <small>{{ $project->created_at }}</small>
                            </li>
                            <li>
                                <span class="pe-2">Modificato il:</span>
                                <small>{{ $project->updated_at }}</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-10 pt-3">
                    <p>{{ $project->content }}</p>
                    <hr>
                </div>
            </div>
        @empty
            <hr>
            <h2 class="text-center pt-4 pb-4">Nessun progetto</h2>
            <hr>
        @endforelse

    </div>
    @include('includes.layout.footer')

@endsection
