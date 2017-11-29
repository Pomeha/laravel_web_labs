<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\Post;
use Excel;
use DB;
use Redirect;
use Session;


class CVScontroller extends Controller
{

    public function importexport()
    {
        return view('probka.importexport', compact(null));
    }

    public function importCVS(Request $request)
    {
        if ($request->file('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();

            if (!empty($data) && $data->count()) {
                foreach ($data->toArray() as $row) {
                    if (!empty($row)) {
                        $dataArray[] =
                            [
                                'post_title' => $row['post_title'],
                                'post_content' => $row['post_content'],
                                'author_id' => $row['author_id'],
                                'post_slug' => $row['author_id'],
                                'created_at' => $row['created_at'],
                                'post_type' => 'post'
                            ];
                    }
                }
                if (!empty($dataArray)) {
                    Post::insert($dataArray);
                    return redirect('/');
                }
            }
        }
        else return back();
    }
}
