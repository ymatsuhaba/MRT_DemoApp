<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
dump(DateTime::createFromFormat('Ym', '201512')->format('Y年m月'));
class SpotJob extends Model
{
}
