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

    // タスク作成画面を表示
    public function createPage() {
        return view('todo_create');
    }

     // タスクを登録
     public function create(Request $request) {
         $todo = new Todos();
         $todo->task_name = $request->task_name;
         $todo->task_description = $request->task_description;
         $todo->assign_person_name = $request->assign_person_name;
         $todo->estimate_hour = $request->estimate_hour;
         $todo->save();
 
         return redirect('/');
     }
}
