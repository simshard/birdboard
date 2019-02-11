@extends('layouts.app')
@section('content')
  <header class="flex justify-between items-end w-full mb-4">
   <h2>All Projects</h2>
    <a href="/projects/create"class="button">Create New Project</a>
  </header>
  <main class="lg:flex lg:flex-wrap -mx-3">
    @forelse ($projects as $project)
    <div class="lg:w-1/3 px-3 pb-6">
      @include('projects.card')
   </div>
    @empty
      <h3> No Projects Yet</h3>
      @endforelse
  </main>
@endsection


 
