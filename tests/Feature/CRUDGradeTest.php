<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    public function test_aUserCanBeDeleted(){
        $this->withExceptionHandling();

        $user = Grade::factory()->create();
        $this->assertCount(1, Grade::all());

        $response = $this->delete(route("deleteGrade", $grade->id));

        $this->assertCount(0, Grade::all());
    }
}