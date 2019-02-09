@extends('layouts.app')

@section('content')
  <header class="flex justify-between items-end w-full mb-4">
   <p ><a href="/home" class="font-normal text-grey-darker no-underline">My Projects</a>/{{  $project->title  }}</p>
    <a href="/projects/create"class="button">Create New Project</a>
  </header>

<main>
  <div class="lg:flex -mx-3">
<div class="lg:w-2/3 px-3 mb-6">
  <h2 class="font-normal text-grey-darker">Tasks</h2>
   @foreach ($project->tasks as $task)
     <p>{{ $task->body }}</p>
   @endforeach


    <div class="mb-3">
      <div class="card">
        Lorem ipsum dolor sit amet.
      </div>
    </div>
  <div class="mb-3">
  <h2 class="font-normal text-grey-darker">Notes</h2>
    <textarea class="card w-full" style="min-height:150px">Lorem ipsum dolor sit amet.</textarea>
  </div>
</div>
<div class="lg:w-1/3 px-3">
 @include('projects.card')
  </div>
</div>
</main>


 @endsection
