<form method="POST" action="{{ route('admin.skills.store') }}">
    @csrf
    <div class="card_show">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <label for="title" class="mt-3 form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Inserisci il titolo..." max-lenght="50" required>
                </div>

                <div class="col-12">
                    <label for="description" class="mt-3 form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                </div>

                <div class="col-12 col-md-10">
                    <label for="image" class="mt-3 form-label">Immagine</label>
                    <input type="url" class="form-control" id="image" name="image" value="{{ old('image') }}"
                        placeholder="Inserisci un url..." max-lenght="50">
                </div>

                <div class="col-12 col-md-2">
                    <div class="mt-4 d-flex justify-content-center align-items-center">
                        <img src="{{ old('image', 'https://marcolanci.it/utils/placeholder.jpg') }}" alt="preview"
                            class="img-fluid rounded-2 shadow w-75" id="img-preview">

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
