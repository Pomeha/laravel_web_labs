<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Statistics;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function Count($name,$month,$ip){
        $stata = Statistics::firstOrNew(array('page_name'=>$name,'month'=>$month,'ip'=>$ip));
        $stata->count = $stata->count + 1;
        $stata->save();
    }
}
