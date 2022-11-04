<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    public function read () {
        $todos = DB::table("todo_tb")->get();
        return view ("todos.todos", [
            "todos" => $todos
        ]);
    }

    public function create (Request $request) {
        $insertTodo = DB::table("todo_tb")->insert([
            'todo_name' => $request->todo_name,
            'todo_desc' => $request->todo_desc
        ]);
        if ($insertTodo) {
            return redirect ("/todos");
        }
        return $insertTodo;
    }

    public function edit ($id) {
        $todo_id = $id;
        $todo = DB::table("todo_tb")->where("todo_id", $todo_id)->first();
        return view ("todos.edittodo", [
            "todo" => $todo
        ]);
    }

    public function update (Request $request, $id) {
        $todo_id = $id;
        $update = DB::table('todo_tb')->where("todo_id", $todo_id)->update([
            "todo_name" => $request->todo_name,
            "todo_desc" => $request->todo_desc
        ]);
        if ($update) {
            return redirect ("/todos");
        } else {
            return $update;
            return "An errror occured";
        }
    }

    public function delete ($todo_id) {
        $delete = DB::table("todo_tb")->where("todo_id", $todo_id)->delete();
        return redirect("/todos");
    }
}
