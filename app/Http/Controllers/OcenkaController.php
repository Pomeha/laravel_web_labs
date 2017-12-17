<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predm;
use App\Students;
use App\Ocenkas;

class OcenkaController extends Controller
{
    function ocenstud()
    {
        $predms = Predm::all();
        $students = Students::all();
        return view('probka.ocenstud',['predms'=>$predms,'students'=>$students]);
    }

    function giveocen(Request $request)
    {
        $this->validate($request,[
            'predm' => 'required',
            'rus' => 'required',
            'etsc' => 'required',
            'stud_name'=>'required',
        ]);

        $ocenka = new Ocenkas;

        $ocenka->predm = $request->predm;
        $ocenka->rus = $request->rus;
        $ocenka->etsc = $request->etsc;
        $ocenka->stud_name = $request->stud_name;

        $ocenka->save();
        return redirect()->route('indexstud');
    }
}
