<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Todos extends Model
{
    protected $guarded = ['id'];
    //使用可能なテーブルの設定
    protected $table = "todos";

    //編集可能なテーブルの設定
    protected $fillable = [
        'task_name',
        'task_description',
        'assign_person_name',
        'estimate_hour',
    ];
}
