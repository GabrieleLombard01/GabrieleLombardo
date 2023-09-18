@extends('layouts.app')

@section('title', 'Edit-Instruction')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/instructions') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
    </div>

    @include('includes.instructions.form')

@endsection

@section('scripts')
    @vite('resources/js/image-previewer.js')
@endsection