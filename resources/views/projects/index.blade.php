<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>BirdBoard</h1>
    <ul>
      @forelse ($projects as $project)
        <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
      @empty
        <li> No Projects Yet</li>
 
      @endforelse
    </ul>
  </body>
</html>
