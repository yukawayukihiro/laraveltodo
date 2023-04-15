<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    //todoリスト画面を表示
    public function index () {
        $todos = Todos::orderBy('id','asc')->get();
        return view('todo_list',compact('todos',$todos));
    }
}
