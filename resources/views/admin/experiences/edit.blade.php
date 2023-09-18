@extends('layouts.app')

@section('title', 'Create-Experience')

@section('content')
    <div class="container">
        <div class="mt-4 mb-2 d-flex justify-content-center align-items-center">
            <a class="btn btn-outline-primary text-decoration-none fw-bold" href="{{ url('admin/experiences') }}"><i
                    class="fa-solid fa-circle-chevron-left me-2"></i>Torna indietro</a>
        </div>
        <div class="mt-3 mb-3 d-flex justify-content-center align-items-center">
            <h2>Modifica...</h2>
        </div>
    </div>

    <form method="POST" action="{{ route('admin.experiences.update', $experience) }}">
        @method('PUT')
        @csrf
        <div class="card_show">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <label for="title" class="mt-3 form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $experience->title) }}" placeholder="Inserisci il titolo..."
                            max-lenght="50" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="qualification" class="mt-3 form-label">Qualifica</label>
                        <input type="text" class="form-control" id="qualification" name="qualification"
                            value="{{ old('qualification', $experience->qualification) }}"
                            placeholder="Inserisci una qualifica..." max-lenght="50" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="contract" class="mt-3 form-label">Contratto</label>
                        <input type="text" class="form-control" id="contract" name="contract"
                            value="{{ old('contract', $experience->contract) }}" placeholder="Inserisci un contratto..."
                            max-lenght="50" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="location" class="mt-3 form-label">Luogo</label>
                        <input type="text" class="form-control" id="location" name="location"
                            value="{{ old('location', $experience->location) }}" placeholder="Inserisci il luogo..."
                            max-lenght="50" required>
                    </div>

                    <div class="col-12">
                        <label for="description" class="mt-3 form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $experience->description) }}</textarea>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="start_date" class="mt-3 form-label">Inizio</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="{{ old('start_date', $experience->start_date) }}" max-lenght="50" required>
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="end_date" class="mt-3 form-label">Fine</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="{{ old('end_date', $experience->end_date) }}" max-lenght="50" required>
                    </div>

                    <div class="col-12 col-md-10">
                        <label for="image" class="mt-3 form-label">Immagine</label>
                        <input type="url" class="form-control" id="image" name="image"
                            value="{{ old('image', $experience->image) }}" placeholder="Inserisci un url..."
                            max-lenght="50">
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="mt-4 d-flex justify-content-center align-items-center">
                            <img src="{{ old('image', $experience->image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
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
