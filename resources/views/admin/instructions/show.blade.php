@extends('layouts.app')

@section('title', 'Instruction')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-secondary text-decoration-none fw-bold" href="{{ url('admin/instructions') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna in dietro</a>
        </div>


        <div class="mt-3  row card_show justify-content-center justify-content-md-start  ">

            <div class="col-12 col-md-4"><img class="float-start me-3 img-fluid rounded-3" width="250px"
                    src="{{ $instruction->image }}" alt="{{ $instruction->title }}">
                <h1 class=" fw-bold text-secondary my-2">
                    {{ $instruction->title }}
                </h1>
                <h3 class=" text-secondary ">
                    {{ $instruction->qualification_study }}
                </h3>
                <h3 class=" text-secondary ">
                    {{ $instruction->course_study }}
                </h3>
                <h5 class=" text-secondary ">
                    {{ $instruction->start_date }}
                </h5>
                <h5 class=" text-secondary ">
                    {{ $instruction->end_date }}
                </h5>
            </div>

            <div class="col-12 col-md-8 p-3">
                <h5 class=" text-secondary ">
                    {{ $instruction->description }}
                </h5>
            </div>

        </div>


    </div>
@endsection
