<div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between mb-4 mx-4">
        <h4 class="card-title pt-2">Results</h4>
        <a href="{{route('standings.index')}}">
          <button type="button"  class="btn btn-secondary px-4">
            View League Table
          </button>
        </a>
      </div>
      <div class="results">
        @foreach($results as $result)
            @if ($loop->index > 0)
                @if($result->match_date != $previousDate)
                    <hr class="mx-3"> 
                @endif
            @endif 
            @php
                $previousDate = $result->match_date;
            @endphp
            <div class="row px-4">
                <div class="col-3 mt-3"><span>{{$result->match_date}}</span></div>
                <div class="col-3 mt-3"> 
                    <span>{{$result->team1}}</span>
                    <span><img width="20" height="13" src="{{URL::to('/')}}/pragmarx/countries/flag/file/{{ $result->team1 }}.svg" height="100" weight="100"></span>
                </div>
                <div class="col-3 mt-3">
                    <span>{{$result->team1_score}}</span>
                    <span>-</span>
                    <span>{{$result->team2_score}}</span>
                </div>
                <div class="col-3 mt-3">
                    <span><img width="20" height="13" src="{{URL::to('/')}}/pragmarx/countries/flag/file/{{ $result->team2 }}.svg" alt=""></span>
                    <span>{{$result->team2}}</span>
                </div>
            </div>                
        @endforeach
      </div>
    </div>
</div>