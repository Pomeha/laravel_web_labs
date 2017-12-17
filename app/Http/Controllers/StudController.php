<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Students;
use App\Predm;
use App\Ocenkas;
use Session;

class StudController extends Controller
{
    public function index()
    {
        $predms = Predm::all();
        $students = Students::all();
        $ocenkas = Ocenkas::all();
        return view('probka.indexstudents',['students'=>$students,'predms'=>$predms,'ocenkas'=>$ocenkas]);
    }

    public function Create()
    {
        return view('probka.createstud');
    }

    public function Save(Request $request)
    {
        $this->validate($request, [
           'fio' => 'required',
        ]);
        $student = new Students;

        $student->fio = $request->fio;
        $student->group = $request->group;

        $student->save();
        return redirect()->route('indexstud');
    }

    public function goodstuds()
    {
        $ocenkas = Ocenkas::where('rus', 'отлично')->get();
        $predms = Predm::all();
        $students = Students::all();
        return view('probka.indexstudents',['students'=>$students,'predms'=>$predms,'ocenkas'=>$ocenkas]);
    }
}
