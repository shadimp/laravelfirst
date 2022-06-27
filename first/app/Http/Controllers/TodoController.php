<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Http\Requests\TodoupdateRequest;

class TodoController extends Controller
{
    //
    public function list()
    {
        // $s=Todo::updateorcreate(['name'=>'mms'],['name'=>'mohamadreza']);
        // $s = Todo::query()->where('id', '>', 2)->get()->tosql();
        // $s = Todo::query()->where('id')->get()->all();
        $s = Todo:: query()->get()->all();
        // dd($s);
        return view('/todo/todolist', ['Todo' => $s]);
    }
    public function show($id)
    {
        $s = Todo::getByID($id);    
        return view('/todo/todoshow', ['Todo' => $s]);
    }
    public function delete($id)
    {
        $s = Todo::query()->find($id);
        $s->delete();
        
    }
    public function del(Todo  $todo)
    {
        $todo->delete();
        return redirect()->route('list');
    }
    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->id = $request->id;
        $todo->name = $request->name;
        $todo->age = $request->age;
        $todo->abilities = $request->abilities;

        if ($todo->save()) {
            return redirect()->route('list');
        }
        return; // 422
    }
    
    public function update(TodoupdateRequest $request)
    {
        $todo = Todo::query()->where('id', $request->id)->first();
        // $todo = Todo::query()->where('id', $todo)->first();

        if ($todo) {
            $todo->id = $request->id;
            $todo->name = $request->name;
            $todo->age = $request->age;
            $todo->abilities = $request->abilities;

            if ($todo->save()) {

                return redirect()->route('list');
            }
            return; // 422
        }

        return; // 401

    }
}
