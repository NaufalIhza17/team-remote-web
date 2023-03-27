<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function tampiltodo()
    {
        return view('tampiltodo');
    }

    public function tambahtodo()
    {
        return view('tambahtodo');
    }

    // public function simpantodo(Request $request)
    // {
    //     $todo = TodoModel::create([
    //         'nm_todo' => $request->nm_santri,
    //         'desc_todo' => $request->tmp_lahir
    //     ]);

    //     return redirect()->route('tampilsantri');
    // }

    public function simpantodo(Request $request)
    {
        $todo = Todo::create([
            'nm_todo' => $request->nm_todo,
            'desc_todo' => $request->desc_todo            
        ]);

        return redirect()->route('tampiltodo');
    }
}
