@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Projects</div>
                  </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="mb-4">
              <a href="/projects/create"class="btn btn-primary btn-info">Create New Project</a>
            </div>
            <ul>
              @forelse ($projects as $project)
                <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
              @empty
                <li> No Projects Yet</li>

              @endforelse
        </div>
    </div>
</div>
@endsection
