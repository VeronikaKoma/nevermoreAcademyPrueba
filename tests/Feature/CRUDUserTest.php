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
