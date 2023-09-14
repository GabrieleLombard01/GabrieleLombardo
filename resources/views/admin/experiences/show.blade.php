@extends('layouts.app')

@section('title', 'Experiences')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-secondary text-decoration-none fw-bold" href="{{ url('admin/experiences') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>


        <div class="mt-3  row card_show justify-content-center justify-content-md-start  ">

            <div class="col-12 col-md-4"><img class="float-start me-3 img-fluid rounded-3" width="250px"
                    src="{{ $experience->image }}" alt="{{ $experience->title }}">
                <h1 class=" fw-bold text-secondary my-2">
                    {{ $experience->title }}
                </h1>
                <h3 class=" text-secondary ">
                    {{ $experience->qualification }}
                </h3>
                <h3 class=" text-secondary ">
                    {{ $experience->contract }}
                </h3>
                <h3 class=" text-secondary ">
                    {{ $experience->location }}
                </h3>
            </div>

            <div class="col-12 col-md-8 p-3">
                <h5 class=" text-secondary ">
                    {{ $experience->description }}
                </h5>
            </div>

        </div>


    </div>
@endsection
