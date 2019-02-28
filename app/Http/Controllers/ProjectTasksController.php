<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
  /**
   * Add a task to the given project.
   *
   * @param Project $project
   * @return \Illuminate\Http\RedirectResponse
   */

    public function store(Project $project)
    {
      if (auth()->user()->isNot($project->owner)) {
        abort(403);
      }
      request()->validate(['body'=>'required']);
      $project->addTask(request('body'));
      return redirect($project->path())->with('status', 'Task added successfully!');;
    }
    /**
        * Update the project.
        *
        * @param  Project $project
        * @param  Task    $task
        * @return \Illuminate\Http\RedirectResponse
        */
       public function update(Project $project, Task $task)
       {
           if (auth()->user()->isNot($project->owner)) {
               abort(403);
           }
           request()->validate(['body' => 'required']);
           $task->update([
               'body' => request('body'),
               'completed' => request()->has('completed')
           ]);
           return redirect($project->path());
       }

}
