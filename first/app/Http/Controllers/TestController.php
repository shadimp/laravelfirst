<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{    //
    public function q(){
        $s=Test::query()->get()->all();
         //dd($s);
        return view('testquery',['Test'=>$s]);
    }
    public function q1($id){

         $s=Test::query()->where('id',$id)->first();
        //dd($s);
        return view('testquery',['Test'=>$s]);
    }
    public function q2($id){

        $s=Test::query()->find($id);
        $s->delete();
       //dd($s);
    //    return view('testquery',['Test'=>$s]);
   }
   public function q3(Test  $test){

    // $s=Test::query()->find($todo);
    $test->delete();
   //dd($s);
return view('testquery',$test);
}
}
