@extends('pages.master')
@section('title', 'Scores')
@push('child-styles')
<link rel="stylesheet" href="/css/toastr/toastr.min.css">
<style>
    .button-primary{
    background: rgb(105, 105, 243);
    border: none;
    color: white;
    border-radius: 5px;
    padding: 5px;
    width: 50%;
}
.form-block{
    padding-bottom: 12px;
}
span.invalid-feedback{
    display: block;
}
</style>
@endpush
@section('content')

<div class="container">
    <div class="card my-4">
        <div class="card-body mx-4">
            @include('pages.flash_message')
            <h4 class="card-title pt-2">New Result</h4>
            <div class='form-block'>
                <form action="{{route('results.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-11">
                                <div class="row justify-content-center">
                                    <div class="form-group col-2 pt-3">
                                        <input type="date" name="match_date" class="form-control" value="{{ old('match_date')  }}" >
                                        @error('match_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6 row pt-3">  
                                        <div class="form-group col-4 mb-4">
                                            <select name="team1" class="form-control"  id="team1">
                                                <option value="">
                                                    Select Team 1
                                                </option>
                                                @foreach($teams as $team)
                                                    <option 
                                                        value="{{$team->country_code}}"
                                                        @if(old('team1') === $team->country_code) selected @endif
                                                        
                                                    >
                                                        {{$team->country}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('team1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-2 mb-4">
                                            <input name="team1_score" type="number" class="form-control @error('team1_score') is-invalid @enderror"  value="{{ old('team1_score')  }}"  id="firstname" placeholder="  -">
                                            @error('team1_score')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-2 mb-4">
                                            <input type="number" name="team2_score" class="form-control  @error('team2_score') is-invalid @enderror" value="{{ old('team2_score')  }}" id="lastname" placeholder="  -">
                                            @error('team2_score')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-4 mb-4">
                                            <select name="team2" class="form-control"  id="team2">
                                                <option value="">
                                                    Select Team 2
                                                </option>
                                                @foreach($teams as $team)
                                                    <option 
                                                        value="{{$team->country_code}}"
                                                        @if(old('team2') === $team->country_code) selected @endif  
                                                    >
                                                        {{$team->country}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('team2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center pt-3"> 
                                    <button class="button button-primary" type="submit">Enter</button>
                                </div>
                            </div>
                          
                        </div>
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @include('pages.results')
</div>

@endsection


@push('child-scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
<script src="/css/toastr/toastr.min.js"></script>
    @include('pages.partials.toastr')
@endpush