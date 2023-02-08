<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Grade;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\GradeController;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    /* public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    } */

    public function test_listGradeAppearInHomeView(){
        $this->withExceptionHandling();
        $grade = Grade::Factory(2)->create();
        $grades = $grade[0];
        $response = $this->get('/');
        $response->assertSee($grade->name);
        $response->assertStatus(200)
            ->assertViewIs('home');
    } 
}

