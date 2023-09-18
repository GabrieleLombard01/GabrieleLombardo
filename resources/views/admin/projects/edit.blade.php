@extends('layouts.app')

@section('title', 'Create-Project')

@section('content')
    <div class="container">
        <div class="mt-4 mb-5 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/projects') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
    </div>

    <form method="POST" action="{{ route('admin.projects.update', $project) }}">
        @method('PUT')
        @csrf
        <div class="card_show">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <label for="title" class="mt-3 form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}" placeholder="Inserisci il titolo..." max-lenght="50"
                            required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="slug" class="mt-3 form-label">Slug</label>
                        <input type="text" class="form-control" id="slug"
                            value="{{ Str::slug(old('title', $project->title), '-') }}" max-lenght="50" disabled>
                    </div>

                    <div class="col-12">
                        <label for="content" class="mt-3 form-label">Descrizione</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $project->content) }}</textarea>
                    </div>


                    <div class="col-12 col-md-10">
                        <label for="image" class="mt-3 form-label">Immagine</label>
                        <input type="url" class="form-control" id="image" name="image"
                            value="{{ old('image', $project->image) }}" placeholder="Inserisci un url..." max-lenght="50">
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="mt-4 d-flex justify-content-center align-items-center">
                            <img src="{{ old('image', $project->image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
                                alt="preview" class="img-fluid rounded-2 shadow w-75" id="img-preview">

                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-success ">
                        <i class="fas fa-floppy-disk me-2"></i> Salva
                    </button>
                </div>

            </div>

        </div>
    </form>


@endsection

@section('scripts')
    @vite('resources/js/image-previewer.js')
    @vite('resources/js/slug-generator.js')
@endsection
