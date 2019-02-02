<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;

class ProjectsController extends Controller
{
 //home
    public function index()
    {
       $projects=Project::all();
      //$projects=auth()->user()->projects;
      return view('projects.home',compact('projects'));
    }

    public function create()
    {
    return view('projects.create' );
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
    if (auth()->user()->isNot($project->owner)){
      abort(403);
    }
      return view('projects.show',compact('project'));
  }



}
