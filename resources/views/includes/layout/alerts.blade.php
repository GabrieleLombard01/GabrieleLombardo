@if (session('alert-message'))
    <div class="container p-2">
        <div class="mt-4 alert alert-{{ session('alert-type') ?? 'info' }}">
            {{ session('alert-message') }}
            <button type="button" class="float-end btn-close ms-5" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

<div class="container mt-2 p-2">
    @if ($errors->any())
        <div class="alert alert-danger ">
            <button type="button" class="float-end btn-close ms-5" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
