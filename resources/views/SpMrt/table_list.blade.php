{{--@if(count($data_sp_mrt) > 0)--}}
{{--    @foreach($data_sp_mrt as $data)--}}

{{--    {{$data->Chinese_sei}}--}}
{{--    {{$data->Chinese_mei}}--}}
{{--    {{$data->Japanese_sei}}--}}
{{--    {{$data->Japanese_mei}}--}}
{{--    {{$data->gender}}--}}
{{--    {{$data->email}}--}}
{{--    {{$data->gender}}--}}
{{--    @endforeach--}}
{{--@endif--}}

{{--{{$data_sp_mrt->Chinese_mei}}--}}
{{--@foreach($data_sp_mrt as $data_sp_mrt)--}}
{{$data_sp_mrt->Chinese_sei}}
{{$data_sp_mrt->Chinese_mei}}
{{$data_sp_mrt->Japanese_sei}}
{{$data_sp_mrt->Japanese_mei}}
{{$data_sp_mrt->gender}}
{{$data_sp_mrt->email}}
{{$data_sp_mrt->password}}
<a class="btn btn-secondary" href="SpMrt.DB_list">DB list</a>
{{--@endforeach--}}


{{--{{$Chinese_sei}}--}}
{{--{{$Chinese_mei}}--}}
{{--{{$Japanese_sei}}--}}
{{--{{$Japanese_sei}}--}}
{{--{{$gender}}--}}
{{--{{$email}}--}}
{{--{{$password}}--}}