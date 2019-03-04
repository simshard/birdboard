
 @extends ('layouts.app')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <header class="flex items-center mb-3 py-4">
      <div class="flex justify-between items-end w-full mb-4">
           <p ><a href="/projects" class="font-normal text-grey-darker no-underline hover:underline">My Projects</a>/{{  $project->title  }}</p>
            <a href="/projects/create"class="button">Create New Project</a>
        </div>
    </header>
    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-grey-darker font-normal mb-3">Tasks</h2>
                    {{-- tasks --}}
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                        <form method="post" action="{{  $task->path() }}">
                        @method('PATCH')
                        @csrf
                      <div class="flex">
                        <input name="body" class="w-full {{ $task->completed?'text-grey':'' }}" value="{{ $task->body }}" >
                        <input name="completed" type="checkbox" onchange="this.form.submit()"{{ $task->completed?'checked':'' }}>
                      </div>
                        </form>
                      </div>
                      @endforeach
                        <div class="card mb-3">
                          <form method="post" action="{{ $project->path().'/tasks' }}">
                            @csrf
                          <input placeholder="Add a Task" type="text" class="w-full" name="body" id="body"></div>
                        </form>
                        </div>



                <div>
                    <h2 class="text-lg text-grey-darker font-normal mb-3">General Notes</h2>

                    {{-- general notes --}}
                    <textarea class="card w-full" style="min-height: 200px">lorem ipsum {{$project->notes}}</textarea>
                </div>
            </div>

            <div class="lg:w-1/4 px-3 lg:py-8">
                @include ('projects.card')
            </div>
        </div>
    </main>


@endsection
