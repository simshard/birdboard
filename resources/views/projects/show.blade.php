@extends('layouts.app')

@section('content')
  <header class="flex justify-between items-end w-full mb-4">
   <h2>My Projects</h2>
    <a href="/projects/create"class="button">Create New Project</a>
  </header>

<main>
  <div class="flex -mx-3">


<div class="w-2/3 px-3">
  <h2 class="font-normal text-grey-darker">Tasks</h2>

<h2 class="font-normal text-grey-darker">Notes</h2>
<div class="card">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</div>
</div>
<div class="w-1/3 px-3">
<div class="card">
  <h1>{{ $project->title }}</h1>
    <div class="text-grey-darker">
     {{ $project->description }}
    </div>
<a href="/projects">All Projects</a>
    </div>
  </div>
</div>
</main>


 @endsection
