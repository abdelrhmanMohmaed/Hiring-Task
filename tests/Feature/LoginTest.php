<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_login_returns_token_with_valid_credentials(): void
    {
        $user = User::factory()->create();

        $response = $this->postJson('/api/v1/login',[
            'email'=> $user->email,
            'password'=> '123456789'
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['access_token']);
    }

    public function test_login_returns_error_with_valid_credentials(): void
    {

        $response = $this->postJson('/api/v1/login',[
            'email'=> 'admin@admin.com',
            'password'=> '123456789'
        ]);

        $response->assertStatus(422);
    }
}
