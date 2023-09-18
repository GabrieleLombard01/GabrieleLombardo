@extends('layouts.app')

@section('title', 'Create-Skill')

@section('content')
    <div class="container">
        <div class="mt-4 mb-2 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/skills') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
        <div class="mt-3 mb-3 d-flex justify-content-center align-items-center">
            <h2>Modifica...</h2>
        </div>
    </div>

    <form method="POST" action="{{ route('admin.skills.update', $skill) }}">
        @method('PUT')
        @csrf
        <div class="card_show">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <label for="title" class="mt-3 form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $skill->title) }}" placeholder="Inserisci il titolo..." max-lenght="50"
                            required>
                    </div>

                    <div class="col-12">
                        <label for="description" class="mt-3 form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $skill->description) }}</textarea>
                    </div>

                    <div class="col-12 col-md-10">
                        <label for="image" class="mt-3 form-label">Immagine</label>
                        <input type="url" class="form-control" id="image" name="image"
                            value="{{ old('image', $skill->image) }}" placeholder="Inserisci un url..." max-lenght="50">
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="mt-4 d-flex justify-content-center align-items-center">
                            <img src="{{ old('image', $skill->image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
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
@endsection
