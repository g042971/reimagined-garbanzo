<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('todo.index');
    }

    public function update(Request $request)
    {
        return $request->all();
    }
}
