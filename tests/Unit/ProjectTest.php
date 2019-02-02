<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
  use WithFaker,RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
    //  $this->withoutExceptionHandling();
      // $this->assertTrue(true);
      $project=factory('App\Project')->create();
      $this->assertEquals('/projects/'.$project->id, $project->path());
    }
    /** @test */
    public function it_has_an_owner()
    {
       $project=factory('App\Project')->create();
       $this->assertInstanceOf('App\User',$project->owner );
    }


}
