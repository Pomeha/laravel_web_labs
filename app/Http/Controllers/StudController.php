<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Students;
use Session;

class StudController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('probka.indexstudents',['students'=>$students]);
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

        Session::flash('success', 'Student created');
        return redirect()->route('indexstud');
    }
}
