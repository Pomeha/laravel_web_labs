<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Domens;


class DomensController extends Controller
{
    public function domensview()
    {
        return view('probka.domensview');
    }

    public function domenPost(Request $request)
    {
        $domens = Domens::where('name',$request->name)-get();
        if($domens != null){
        return response()->json(['success'=>'Exist']);
        }
        else
            return response()->json(['error'=>'Not exist']);
    }

    public function create(Request $request)
    {

    }

}