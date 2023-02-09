<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Grade; 
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDGradeTest extends TestCase 
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
        public function test_listGradeAppearInHomeView(){
        $this->withExceptionHandling();

        $grades = Grade::factory()->create();
        $grade = $grades[0];

        $response = $this->get('/');
        
        $response->assertSee($grade->name);

        $response->assertStatus(200)
        ->assertViewIs('home');
        
    }
}
