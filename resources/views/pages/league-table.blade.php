@extends('pages.master')
@section('title', 'League Table')
@push('child-styles')
<link rel="stylesheet" href="/css/toastr/toastr.min.css">
<style>
    .country-code a{
        text-decoration: none;
    }
</style>
@endpush
@section('content')

<div class="container mt-5">
    <div>
        <div class="content-wrapper">
            @include('pages.flash_message')
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="card-title">League Table</h4>
                        <a href="{{route('results.index')}}">
                          <button type="button"  class="btn btn-secondary px-4">
                            Results
                          </button>
                        </a>
                      </div>
                      <div class="table-box">
                        @include('pages.tables.leagues')
                      </div>
                      
                    </div>
                  </div>
              </div>
          </div>
    </div>
</div>

@endsection


@push('child-scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
<script src="/css/toastr/toastr.min.js"></script>
    @include('pages.partials.toastr')
@endpush