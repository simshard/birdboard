<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Project;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTasksTest extends TestCase
{
  use RefreshDatabase;

    /** @test */
    public function a_project_can_have_tasks()
    {
        $this->withoutExceptionHandling();
      $this->signIn();
      $project=factory('App\Project')->create(['owner_id'=>auth()->id()]);

      $this->post($project->path().'/tasks',['body'=>'test a task']);

      $this->get($project->path())->assertSee('test a task');
    }
}
