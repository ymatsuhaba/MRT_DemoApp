<div class="content"><!--height:605px 計640px-->
    @if(count($mrtDbCollection) > 0)
        @foreach($mrtDbCollection as $mrtdbCol)
            <p> {{$mrtdbCol}}</p>
        @endforeach
    @endif
</div>