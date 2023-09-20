@if ($project->exists)
    <form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data" novalidate>
        @method('PUT')
    @else
        <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" novalidate>
@endif
@csrf
<div class="card_show">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <label for="title" class="mt-3 form-label">Titolo</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
                    id="title" name="title" value="{{ old('title', $project->title) }}"
                    placeholder="Inserisci il titolo..." max-lenght="50" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <label for="slug" class="mt-3 form-label">Slug</label>
                <input type="text" class="form-control" id="slug"
                    value="{{ Str::slug(old('title', $project->title), '-') }}" max-lenght="50" disabled>
            </div>

            <div class="col-12">
                <label for="content" class="mt-3 form-label">Descrizione</label>
                <textarea class="form-control @error('content') is-invalid @elseif(old('content')) is-valid @enderror"
                    id="content" name="content" rows="5" required>{{ old('content', $project->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="col-12 col-md-10">
                <label for="image" class="mt-3 form-label">Immagine</label>
                <input type="url"
                    class="form-control @error('image') is-invalid @elseif(old('image')) is-valid @enderror"
                    id="image" name="image" value="{{ old('image', $project->image) }}"
                    placeholder="Inserisci un url..." max-lenght="50">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
