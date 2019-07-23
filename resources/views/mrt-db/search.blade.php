<div class="content"><!--height:605px 計640px-->
    @if(count($mrtDbCollection) > 0)
        @foreach($mrtDbCollection as $mrtdbCol)
            <p><a href="mrt-db.show"> {{$mrtdbCol}}</a></p>
        @endforeach
    @endif
</div>