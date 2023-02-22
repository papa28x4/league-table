<table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th> Country </th>
        <th> MP </th>
        <th> W </th>
        <th> D </th>
        <th> L </th>
        <th> Pts </th>
        <th> GF </th>
        <th> GA </th>
        <th> GD </th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($standings as $standing)
          <tr>
              <td class="country-code">
                <span><img width="20" height="13" src="http://127.0.0.1:8000/pragmarx/countries/flag/file/{{$standing->country_code}}.svg" alt=""></span>
                 <a href="{{route('standings.show', $standing->country_code)}}">{{$standing->team->country}}</a> 
                </td>
              <td>{{$standing->MP}}</td>
              <td>{{$standing->W}}</td>
              <td>{{$standing->D}}</td>
              <td>{{$standing->L}}</td>
              <td>{{$standing->Pts}}</td>
              <td>{{$standing->GF}}</td>
              <td>{{$standing->GA}}</td>
              <td>{{$standing->GD}}</td>
          </tr>
       @endforeach
    </tbody>
</table>

