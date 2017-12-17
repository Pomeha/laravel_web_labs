<?php

namespace App\Http\Controllers;

use App\Statistics;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Statistic;

class StatisticsController extends Controller
{
    function index()
    {
        $stats = Statistics::where('month',Carbon::now()->month);
        return view('probka.statistic', ['stats' => $stats]);
    }
}
