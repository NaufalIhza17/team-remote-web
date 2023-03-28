<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function tampiltodo()
    {
        $todo = Todo::select('*')
                ->get();
        return view('tampiltodo', ['todo' => $todo]);
    }

    public function tambahtodo()
    {
        return view('tambahtodo');
    }

    public function simpantodo(Request $request)
    {
        $todo = Todo::create([
            'nm_todo' => $request->nm_todo,
            'desc_todo' => $request->desc_todo            
        ]);

        return redirect()->route('tampiltodo');
    }
}
