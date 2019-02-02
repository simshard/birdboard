<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="col-md-8 blog-main">
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
        <button type="submit" name="submit"  class=" btn btn-primary btn-info">
          Create Project
      </button>


      </form>
    </div>
    </div>






  </body>
</html>
