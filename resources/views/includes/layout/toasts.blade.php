@if (session('toast-message'))
    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">{{ env('APP_NAME') }}</strong>
                <small>Pochi secondi fa...</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body d-flex justify-content-between align-items-center ">
                {{ session('toast-message') }}
                <form method="POST" action="{{ session('toast-route') }}">

                    @csrf

                    @if (session('toast-method'))
                        @method(session('toast-method'))
                    @endif

                    <button class="btn btn-sm btn-outline-success">{{ session('toast-button-label') }}</button>

                </form>
            </div>
        </div>
    </div>
@endif
