<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();
        return response()->json(["Message" => "Task list", $task], 200);
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->user_id = 4;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->category_id = $request->category_id;
        $task->priority = $request->priority;
        $task->completed = $request->completed;


        $task->save();

        return response()->json(["Message" => "Task created sucessfully"], 200);
    }

    public function update($id, Request $request)
    {
        $checkAvailable = Task::findOrFail($id);

        // if ($checkAvailable) {
        //     $data = $request->all();

        // $category = Category::find($id);

        // $category->name = $request->name;
        // $category->description = $request->description;

        // $category->save();

        return response()->json(["Message" => "Task updated sucessfully", 'data' => $request->all()], 200);
        // } else {
        //     return response()->json(["Message" => "Category not found"], 200);
        // }
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json(["Message" => "Task found", 'data' => $task], 200);
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(["Message" => "Task removed"], 200);
    }
}
