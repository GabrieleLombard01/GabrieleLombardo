@extends('layouts.app')

@section('title', 'Competenze')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/skills') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>


        <div class="mt-3  row card_show justify-content-center justify-content-md-start  ">

            <div class="col-12 col-md-4"><img class="float-start me-3 img-fluid rounded-3" width="250px"
                    src="{{ $skill->image }}" alt="{{ $skill->title }}">
                <h1 class=" fw-bold text-secondary my-2">
                    {{ $skill->title }}
                </h1>

            </div>

            <div class="col-12 col-md-8 p-3">
                <h5 class=" text-secondary ">
                    {{ $skill->description }}
                </h5>
            </div>

        </div>

        <div class="mt-4 mb-5 d-flex align-items-center gap-3 justify-content-center ">

            <a class="btn btn-secondary" href="{{ route('admin.skills.edit', $skill) }}"><i
                    class="fa-solid fa-pen-to-square fw-bold text-white"></i></a>
            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">
                    <a class="text-decoration-none" href="#"><i
                            class="fa-solid fa-trash-can fw-bold text-white"></i></a>
                </button>
            </form>

        </div>


    </div>
@endsection
