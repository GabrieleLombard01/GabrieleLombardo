@if ($skill->exists)
    <form method="POST" action="{{ route('admin.skills.update', $skill) }}" enctype="multipart/form-data" novalidate>
        @method('PUT')
    @else
        <form method="POST" action="{{ route('admin.skills.store') }}" enctype="multipart/form-data" novalidate>
@endif
@csrf
<div class="card_show">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <label for="title" class="mt-3 form-label">Titolo</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    id="title" name="title" value="{{ old('title', $skill->title) }}"
                    placeholder="Inserisci il titolo..." max-lenght="50" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="description" class="mt-3 form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"
                    id="description" name="description" rows="5" required>{{ old('description', $skill->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-10">
                <label for="image" class="mt-3 form-label">Immagine</label>
                <input type="file"
                    class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror"
                    id="image" name="image" placeholder="Inserisci un url..." max-lenght="50">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
