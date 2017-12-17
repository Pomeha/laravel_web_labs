<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Predm;

class PredmController extends Controller
{
    function create()
    {
        return view('probka.newpredm');
    }

    function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'short_name'=>'required',
        ]);
        $predm = new Predm;

        $predm->name = $request->name;
        $predm->short_name = $request->short_name;

        $predm->save();

        return redirect()->route('indexstud');
    }
}
