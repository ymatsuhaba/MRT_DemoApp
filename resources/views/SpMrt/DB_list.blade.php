@if(count($sp_mrt_from_DB) > 0)
    @foreach($sp_mrt_from_DB as $sp_mrt_datum)
        <li>
        {{$sp_mrt_datum->Chinese_sei}}
        {{$sp_mrt_datum->Chinese_mei}}
        {{$sp_mrt_datum->Japanese_sei}}
        {{$sp_mrt_datum->Japanese_sei}}
        {{$sp_mrt_datum->gender}}
        {{$sp_mrt_datum->email}}
        {{$sp_mrt_datum->password}}
        {{Config("const.graduation_year.$sp_mrt_datum->graduation_year")}}
        </li>
    @endforeach
@endif