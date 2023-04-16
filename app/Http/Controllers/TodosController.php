<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\DB;

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

     // タスク編集画面を表示
     public function editPage ($id) {
        $todo = Todos::find($id);
        return view('todo_edit',compact('todo',$todo));
     }

     // タスクを更新
     public function edit (Request $request) {
        Todos::find($request->id)->update ([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'assign_person_name' => $request->assign_person_name,
            'estimate_hour' => $request->estimate_hour
        ]);
        return redirect('/');
     }
}
