<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task; 
use App\User;

class TasksController extends Controller
{
    public function index()
    {
         $tasks = Task::all();
         return view('tasks.index', [
         'tasks' => $tasks,
         ]);
     }
  
     public function destroy($id)
     {
         $task = Task::find($id);
         $task->delete();
         return redirect('/');
     }
 
     public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        return redirect('/');
    }
 
 
     public function edit($id)
     {
         $task = Task::find($id);
         return view('tasks.edit', [
         'task' => $task,
         ]);
     }

    public function store(Request $request)
     {
         $task = new Task;
         $task->content = $request->content;
         $task->status = $request->status;
         $task->save();
         return redirect('/');
     }

    public function create()
     {
         $task = new Task;
         return view('tasks.create', [
         'task' => $task,
         ]);
     }

    public function show($id)
     {
         $task = Task::find($id);
         return view('tasks.show', [
         'task' => $task,
         ]);
     }

}
