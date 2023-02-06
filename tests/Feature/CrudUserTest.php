<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDUserTest extends TestCase
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

    public function test_listUserAppearInHomeView(){
        $this->withExceptionHandling();
        $users = User::Factory(2)->create();
        $user = $users[0];
        $response = $this->get('/');
        $response->assertSee($user->name);
        $response->assertStatus(200)
        ->assertViewIs('home');
    }  

    public function test_anUserCannotBeDeletedByAnUser(){
        $this->withExceptionHandling();

        $user = User::factory()->create(['isTeacher' => false]);
        $this->actingAs($user);

        $response = $this->delete(route('deleteUser', $user->id));
        $this->assertCount(1, User::all());

    }

    public function test_anUserCanBeDeletedByATeacher(){
        $this->withExceptionHandling();

        $user = User::factory()->create(['isTeacher' => false]);
        $this->actingAs($user);

        $userTeacher = User::factory()->create(['isTeacher' => true]);
        $this->actingAs($userTeacher);

        $response = $this->delete(route('deleteUser', $user->id));
        $this->assertCount(1, User::all());

    }
}
