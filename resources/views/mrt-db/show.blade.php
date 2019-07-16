<a class="btn btn-default" href="/mrt-db">Go Back</a>
@if(count($mrtdbs) > 0)
    @foreach($mrtdbs as $mrtdb)
        <p>{{$mrtdb->type}}</p>
        <p>{{$mrtdb->start_date}}</p>
        <p>{{$mrtdb->end_date}}</p>
        <p>{{$mrtdb->prefecture}}</p>
        <p>{{$mrtdb->place}}</p>
        <p>{{$mrtdb->start_time}}</p>
        <p>{{$mrtdb->end_time}}</p>
        <p>{{$mrtdb->salary}}</p>
        <p>{{$mrtdb->salary_system}}</p>
        <p>{{$mrtdb->transportation_expenses}}</p>
        <p>{{$mrtdb->transportation_system}}</p>
        <p>{{$mrtdb->work_form}}</p>
        <p>{{$mrtdb->facility_type}}</p>
    @endforeach
@endif