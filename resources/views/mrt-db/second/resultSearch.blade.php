@foreach($mrtDbCollection as $list)
    <li><a href="#"></a>
        求人種別【{{Config("const.type.$list->type")}}】
        開始日付【{{Config("calender.$list->startDate")}}】
        開始時間【{{$list->startTime}}】
        終了時間【{{$list->endTime}}】
        場所【{{$list->place}}】
        都道府県【{{Config("prefecture.$list->prefecture")}}】
        診療科【{{Config("medical.$list->medical")}}】
        勤務体系【{{Config("const.workForm.$list->workForm")}}】
        希望時給【{{$list->hourlySalary}}】
        給料【{{$list->salary}}】
    </li>
@endforeach

