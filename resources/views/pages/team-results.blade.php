@extends('pages.master')
@section('title', 'Scores')
@push('child-styles')
<link rel="stylesheet" href="/css/toastr/toastr.min.css">
@endpush
@section('content')

<div class="container mt-5"> 
    @include('pages.results')
</div>

@endsection