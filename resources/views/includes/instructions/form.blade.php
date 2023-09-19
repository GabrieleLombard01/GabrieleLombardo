@if ($instruction->exists)
    <form method="POST" action="{{ route('admin.instructions.update', $instruction) }}" enctype="multipart/form-data"
        novalidate>
        @method('PUT')
    @else
        <form method="POST" action="{{ route('admin.instructions.store') }}" enctype="multipart/form-data" novalidate>
@endif
@csrf
<div class="card_show">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <label for="title" class="mt-3 form-label">Titolo</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    id="title" name="title" value="{{ old('title', $instruction->title) }}"
                    placeholder="Inserisci il titolo..." max-lenght="50" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="qualification_study" class="mt-3 form-label">Qualifica</label>
                <input type="text"
                    class="form-control @error('qualification_study') is-invalid @elseif(old('qualification_study')) is-valid @enderror"
                    id="qualification_study" name="qualification_study"
                    value="{{ old('qualification_study', $instruction->qualification_study) }}"
                    placeholder="Inserisci una qualifica..." max-lenght="50" required>
                @error('qualification_study')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="course_study" class="mt-3 form-label">Corso di studi</label>
                <input type="text"
                    class="form-control @error('course_study') is-invalid @elseif(old('course_study')) is-valid @enderror"
                    id="course_study" name="course_study" value="{{ old('course_study', $instruction->course_study) }}"
                    placeholder="Inserisci il corso di studi..." max-lenght="50" required>
                @error('course_study')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="valuation" class="mt-3 form-label">Valutazione</label>
                <input type="text"
                    class="form-control @error('valuation') is-invalid @elseif(old('valuation')) is-valid @enderror"
                    id="valuation" name="valuation" value="{{ old('location', $instruction->valuation) }}"
                    placeholder="Inserisci il voto..." max-lenght="50" required>
                @error('valuation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="description"
                    class="mt-3 form-label @error('description') is-invalid @elseif(old('description')) is-valid @enderror">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $instruction->description) }}</textarea>
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
                    id="start_date" name="start_date" value="{{ old('start_date', $instruction->start_date) }}"
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
                    id="end_date" name="end_date" value="{{ old('end_date', $instruction->end_date) }}"
                    max-lenght="50" required>
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
                    id="image" name="image" value="{{ old('image', $instruction->image) }}"
                    placeholder="Inserisci un url..." max-lenght="50">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-2">
                <div class="mt-4 d-flex justify-content-center align-items-center">
                    <img src="{{ old('image', $instruction->image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
                        alt="preview" class="img-fluid rounded-2 shadow w-75 " id="img-preview">

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
