@extends('layouts.app')

@section('content')
<div class="mb3">
  <h2>All Projects</h2>
  <div class="mb-4">
    <a href="/projects/create"class="btn btn-primary btn-info">Create New Project</a>
  </div>
  <div class="flex">
    @forelse ($projects as $project)
            <div class="bg-white mr-4 p-5 rounded shadow w-1/3" style="height:150px;">
              <h3 class="font-normal text-xl mb-3 "><a href="{{ $project->path() }}" class="no-underline">{{ $project->title }}</a></h3>
              <div class="text-grey">{{str_limit( $project->description,120) }}</div>
            </div>
      @empty
          <h3> No Projects Yet</h3>
      @endforelse
         </div>
   </div>

@endsection
