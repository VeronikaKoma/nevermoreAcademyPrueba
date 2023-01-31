<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_listUserAppearInHomeView(){
        $this->withExceptionHandling();
        $users = User::Factory(2)->create();
        $user = $users[0];
        $response = $this->get('/');
        $response->assertSee($user->name);
        $response->assertStatus(200)
        ->assertViewIs('home');
    } 

}
