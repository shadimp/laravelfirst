<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function list()
    {
        $s = Todo::query()->get()->all();
        //dd($s);
        return view('todolist', ['Todo' => $s]);
    }
    public function show($id)
    {
        $s = Todo::query()->where('id', $id)->first();
        //dd($s);
        return view('todoshow', ['Todo' => $s]);
    }
    public function delete($id)
    {
        $s = Todo::query()->find($id);
        $s->delete();
        //dd($s);
        //    return view('testquery',['Test'=>$s]);
    }
    public function del(Todo  $todo)
    {
        $todo->delete();
        return redirect()->route('list');
        
    }
}
