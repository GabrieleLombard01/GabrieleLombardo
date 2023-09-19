@if ($experience->exists)
    <form method="POST" action="{{ route('admin.experiences.update', $experience) }}" enctype="multipart/form-data"
        novalidate>
        @method('PUT')
    @else
        <form method="POST" action="{{ route('admin.experiences.store') }}" enctype="multipart/form-data" novalidate>
@endif
@csrf
<div class="card_show">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <label for="title" class="mt-3 form-label">Titolo</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    id="title" name="title" value="{{ old('title', $experience->title) }}"
                    placeholder="Inserisci il titolo..." max-lenght="50" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="qualification" class="mt-3 form-label">Qualifica</label>
                <input type="text"
                    class="form-control @error('qualification') is-invalid @elseif(old('qualification')) is-valid @enderror"
                    id="qualification" name="qualification"
                    value="{{ old('qualification', $experience->qualification) }}"
                    placeholder="Inserisci una qualifica..." max-lenght="50" required>
                @error('qualification')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="contract" class="mt-3 form-label">Contratto</label>
                <input type="text"
                    class="form-control @error('contract') is-invalid @elseif(old('contract')) is-valid @enderror"
                    id="contract" name="contract" value="{{ old('contract', $experience->contract) }}"
                    placeholder="Inserisci un contratto..." max-lenght="50" required>
                @error('contract')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="location" class="mt-3 form-label">Luogo</label>
                <input type="text"
                    class="form-control @error('location') is-invalid @elseif(old('location')) is-valid @enderror"
                    id="location" name="location" value="{{ old('location', $experience->location) }}"
                    placeholder="Inserisci il luogo..." max-lenght="50" required>
                @error('location')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="description"
                    class="mt-3 form-label @error('description') is-invalid @elseif(old('description')) is-valid @enderror">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $experience->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="start_date" class="mt-3 form-label">Inizio</label>
                <input type="date"
                    class="form-control @error('start_date') is-invalid @elseif(old('start_date')) is-valid @enderror"
                    id="start_date" name="start_date" value="{{ old('start_date', $experience->start_date) }}"
                    max-lenght="50" required>
                @error('start_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="end_date" class="mt-3 form-label">Fine</label>
                <input type="date"
                    class="form-control @error('end_date') is-invalid @elseif(old('end_date')) is-valid @enderror"
                    id="end_date" name="end_date" value="{{ old('end_date', $experience->end_date) }}" max-lenght="50"
                    required>
                @error('end_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-10">
                <label for="image" class="mt-3 form-label">Immagine</label>
                <input type="url"
                    class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror"
                    id="image" name="image" value="{{ old('image', $experience->image) }}"
                    placeholder="Inserisci un url..." max-lenght="50">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
