<div class="card mb-3" style="height:180px;">
  <h3 class="font-normal text-xl mb-2">
    <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
  </h3>
    <div class="text-grey-darker">{{str_limit( $project->description,90) }}</div>
</div>
