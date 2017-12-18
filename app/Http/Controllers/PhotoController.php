<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Session;
use Carbon\Carbon;


class PhotoController extends Controller{

    public function index(Request $request){
        $this->Count('Photos.indexpage',Carbon::now()->month, $request->ip());
        $photos = [];
        $alts = [];
        for($i = 0; $i < 6; $i++){
            $photos[$i] = '/img/' . ($i + 1) . ".jpg";
            $alts[$i] = 'Photo №' . ($i + 1) . '.jpg';
        }
        return view('probka.photoalbum', ['photos' => $photos]);
    }
}