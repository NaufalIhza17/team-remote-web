<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect('/index');
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect('/index');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/index');
    }
}
