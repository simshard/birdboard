<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects=Project::all();
      return view('projects.index',compact('projects'));
    }
    public function store()
    {

    //  dd('its the store method');
      //validate
      $attributes=request()->validate([
        'title'=>'required',
        'description'=>'required',
    ]);
    // $attributes['owner_id']=auth()->id;
     auth()->user()->projects()->create($attributes);


      //persist
    //  Project::create($attributes);
      //redirect
      return redirect('/projects');
    }


  public function show(Project $project)
  {
      return view('projects.show',compact('project'));
  }



}
