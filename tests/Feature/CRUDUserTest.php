<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CRUDUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_aUserCanBeCreated(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isTeacher' => true]);
        $this->actingAs($userAdmin);

        $response = $this->post(route('storeUser'),
        [
        'name' => 'name',
        'surname' => 'surname',
        'email' => 'email',
        'password' => 'password'
        ]);

        $this->assertCount(1, User::all());

        $userNoAdmin = User::factory()->create(['isTeacher' => false]);
        $this->actingAs($userNoAdmin);

        $response = $this->post(route('storeUser'),
        [
        'name' => 'name',
        'surname' => 'surname',
        'email' => 'email',
        'password' => 'password'
        ]);

        $this->assertCount(1, User::all());
    
    }

}
