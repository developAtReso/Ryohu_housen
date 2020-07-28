<?php

namespace App\Http\Controllers;
use App\Folder;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask;
// ★ Authクラスをインポートする
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
	public function index(Folder $folder)
	{
        // すべてのフォルダを取得する
        // $folders = Folder::all();
        // ★ ユーザーのフォルダを取得する
        $folders = Auth::user()->folders()->get();

        // 選ばれたフォルダを取得する
        // $current_folder = Folder::find($id);


        // 選ばれたフォルダに紐づくタスクを取得する
        // $tasks = Task::where('folder_id', $current_folder->id)->get();
        //4章リレーション
        $tasks = $folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder->id,
            'tasks' => $tasks,
        ]);
		// return "Hello world";
    }

    public function showCreateForm(Folder $Folder)
    {
        return view('tasks/create', [
            'folder_id' => $Folder->id
            ]);
    }

    public function create(Folder $Folder, CreateTask $request)
    {
        // $current_folder = Folder::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;

        $Folder->tasks()->save($task);

        return redirect()->route('tasks.index', [
            'id' => $Folder->id,
        ]);
    }

    /**
    * GET /folders/{id}/tasks/{task_id}/edit
     */
    public function showEditForm(Folder $id, Task $task)
    {
        // $task = Task::find($task_id);

        return view('tasks/edit', [
            'task' => $task,
        ]);
    }

    public function edit(Folder $id, Task $task, EditTask $request)
    {
        // 1
        // $task = Task::find($task_id);

        // 2
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();

        // 3
        return redirect()->route('tasks.index', [
            'id' => $task->folder_id,
        ]);
    }

}
