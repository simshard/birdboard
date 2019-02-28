@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="bg-green-lightest border border-green-light text-green-dark px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">  {{ session('status') }}</strong>
  <span class="absolute pin-t pin-b pin-r px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
@endif
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
