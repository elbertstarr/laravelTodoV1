<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = todo::orderBy('created_at', 'DESC')->get();
        
        $data = ['todos' => $todos];
        
        return view('todos.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        
        todo::create($request->all());
        
        return redirect('/');
    }

    public function update(todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        return redirect('/');
    }

    public function destroy(todo $todo)
    {
        $todo->delete();

    	return redirect('/');
    }

    // 補充 未完成
    public function uncomplate(todo $todo)
    {
        $todo->completed = false;
        $todo->save();

        return redirect('/');
    }
}
