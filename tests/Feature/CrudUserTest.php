<?php

namespace Tests\Feature; // código UPDATE. Da error un test//

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CRUDUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_anUserCanBeUpdated(){

        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1, User::all());
    }

}

// código UPDATE. Da error un test//