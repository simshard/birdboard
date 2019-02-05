@extends('layouts.app')

@section('content')
  <div class="flex justify-between items-end w-full mb-4">
   <h2>All Projects</h2>
    <a href="/projects/create"class="button">Create New Project</a>
  </div>

    <div class="flex flex-wrap -mx-3">
    @forelse ($projects as $project)
      <div class="w-1/3 px-3 pb-6">
            <div class="card" style="height:180px;">
              <h3 class="font-normal text-xl mb-2"><a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a></h3>
              <div class="text-grey-darker">{{str_limit( $project->description,90) }}</div>
              </div>
            </div>

      @empty
          <h3> No Projects Yet</h3>
      @endforelse
         </div>
   </div>

@endsection
