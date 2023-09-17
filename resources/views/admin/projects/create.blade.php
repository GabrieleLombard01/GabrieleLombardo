@extends('layouts.app')

@section('title', 'Create-Project')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/projects') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
    </div>

    @include('includes.projects.form')

@endsection

@section('scripts')
    <script>
        const placeholder = 'https://marcolanci.it/utils/placeholder.jpg'
        const imageField = document.getElementById('image');
        const previewField = document.getElementById('img-preview');

        imageField.addEventListener('input', () => {
            previewField.src = imageField.value || placeholder;
        });
    </script>
@endsection
