<form method="POST" action="{{ route('admin.instructions.store') }}">
    @csrf
    <div class="card_show">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <label for="title" class="mt-3 form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Inserisci il titolo..." max-lenght="50" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="qualification_study" class="mt-3 form-label">Qualifica</label>
                    <input type="text" class="form-control" id="qualification_study" name="qualification_study"
                        value="{{ old('qualification_study') }}" placeholder="Inserisci una qualifica..."
                        max-lenght="50" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="course_study" class="mt-3 form-label">Corso di studi</label>
                    <input type="text" class="form-control" id="course_study" name="course_study"
                        value="{{ old('course_study') }}" placeholder="Inserisci il corso di studi..." max-lenght="50"
                        required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="valuation" class="mt-3 form-label">Valutazione</label>
                    <input type="text" class="form-control" id="valuation" name="valuation"
                        value="{{ old('location') }}" placeholder="Inserisci il voto..." max-lenght="50" required>
                </div>

                <div class="col-12">
                    <label for="description" class="mt-3 form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label for="start_date" class="mt-3 form-label">Inizio</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        value="{{ old('start_date') }}" max-lenght="50" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="end_date" class="mt-3 form-label">Fine</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                        value="{{ old('end_date') }}" max-lenght="50" required>
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
