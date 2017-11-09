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
        return view('probka.importexport',compact(null));
    }
//
//    public function downloadExcel(Request $request, $type)
//
//    {
//
//        $data = Post::get()->toArray();
//
//        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
//
//            $excel->sheet('mySheet', function($sheet) use ($data)
//
//            {
//
//                $sheet->fromArray($data);
//
//            });
//
//        })->download($type);
//
//    }
//
//
//    public function importCVS(Request $request)
//    {
//        if($request->hasFile('import_file')){
//            $path = $request->file('import_file')->getRealPath();
//
//            $data = Excel::load($path, function($reader) {})->get();
//
//
////            if(!empty($data) && $data->count()){
////                foreach ($data->toArray() as $key => $value) {
////                    if(!empty($value)){
////                        foreach ($value as $v) {
////                            $insert[] = ['post_title' => $v['post_title'], 'post_content' => $v['post_content'], 'author_id' => $v['author_id'], 'created_at'  => $v['created_at']];
////                        }
////                    }
////                }
//            if (($handle = fopen($path . '.csv', 'r'))!== FALSE) {
//                while (($data = fgetcsv($path, 'r')) !== FALSE) {
//                    $post = new Post();
//                    $post->post_title = $data[1];
//                    $post->post_content = $data[1];
//                    $post->author_id = $data[1];
//                    $post->created_at = $data[1];
//                    $post->save();
//
//                }
//                fclose($handle);
//            }
//
////                if(!empty($insert)){
////                    echo json_encode($insert);
////                    Post::insert($insert);
////                    return Redirect::back()->with('message','Insert was successfully.');
////                }
//            }
//        return Redirect::back()->withErrors('message','Please Check your file, Something is wrong there.');
//    }

    public function importCVS(Request $request){
        $file = $request->file('import_file')->getRealPath() . '.csv';
        $custArr = $this->csvToArray($file);
        if (!$file) {
            return Session::flash('success', 'Не-а!(((');
        }
        dd($customerArr);

        for ($i=0;$i<count($custArr);$i ++)
        {
            $p=Post::firstOrNew($custArr[$i]);
            $p.save();
        }

        return Session::flash('success', 'Here is your success message');
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
