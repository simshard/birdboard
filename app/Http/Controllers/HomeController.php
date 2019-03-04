<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


 
      //$projects=Projects::all();
      //  $projects=auth()->user()->projects;

    //  return view('projects.home' ,compact('projects'));
    public function index()
{
    return view('home');
}

}
