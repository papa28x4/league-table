@if (session('message'))
    <div class="row mb-2">
        <div class="col-md-12 px-0">
            <div class="alert alert-success m-b-lg notification" role="alert">
                {!! session('message') !!}
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="row mb-2 mx-1">
        <div class="col-md-12">
            <div class="alert alert-danger m-b-lg notification" role="alert">
                {!! session('error') !!}
            </div>
        </div>
    </div>
@endif

{{-- <p class="alert {{ Session::get('type', 'alert-info') }}"> --}}