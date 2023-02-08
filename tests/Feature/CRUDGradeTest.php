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
    public function test_aGradeCanBeUpdated(){
        $this->withExceptionHandling();

        $grade = Grade::factory()->create();
        
        $this->assertCount(1, Grade::all());
    }

    public function test_aGradeCanBeCreated(){
        
            $this->withExceptionHandling();

            $userTeacher = Grade::factory()->create(['isTeacher'=>true]);
            $this->actingAs($userTeacher);  
            $response = $this->post(route('storeUser'),
            [
                'name' => 'name',
                'surname' => 'surname',
                'email' => 'email',
                'password' => 'password',
                'img' => 'img',
                'currentTerm' => 'currentTerm'
            ]);
            $this->assertCount(2, User::all());

            $user = Grade::factory()->create(['isTeacher'=>false]);
            $this->actingAs($user);
            $response = $this->post(route('storeUser'),
            [
                'name' => 'name',
                'surname' => 'surname',
                'email' => 'email',     
                'password' => 'password',
                'img' => 'img',
                'currentTerm' => 'currentTerm'
            ]);

            $this->assertCount(3, User::all());
        
    }
}