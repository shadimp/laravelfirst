<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    public function q(){
        $s=Todo::query()->get()->all();
         dd($s);
        return view('querytodo',['Todos'=>$s]);
    }
    public function q1(){
        $s=Todo::query()->where('id',2)->first();
        // dd($s);
        return view('querytodo',['Todos'=>$s]);
    }
    //
}
