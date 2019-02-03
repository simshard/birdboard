@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create project</h1>

      <form class="form-horizontal" action="/projects" method="post">
      @csrf
      <fieldset>
        <div class="form-group">
          <label for="projectName">Project Name</label>
            <input required="required" name="title" type="text" id="title" class="form-control col-md-6 "  >
         </div>

      <div class="form-group">
        <label for="description">Short Description of building project</label>
         <textarea aria-describedby="sDescHelpBlock" rows="2" name="description" cols="50" id="description" class="form-control col-md-6 "></textarea>
          <small id="sDescHelpBlock" class="form-text text-muted">
       Please enter a  brief project description
      </small>
      </div>

      <div class="form-group">
        <button type="submit" name="submit"  class=" btn btn-primary">
          Create Project
      </button>
      <a href="/home" class=" btn btn-link">Cancel</a>
  </div>

      </form>
    </div>
 @endsection
