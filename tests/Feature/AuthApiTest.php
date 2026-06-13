<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_and_login_via_api(): void
    {
        $registerResponse = $this->postJson('/api/register', [
            'name' => 'Alice Example',
            'email' => 'alice@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $registerResponse->assertStatus(201)
            ->assertJsonPath('user.name', 'Alice Example')
            ->assertJsonPath('user.email', 'alice@example.com');

        $loginResponse = $this->postJson('/api/login', [
            'email' => 'alice@example.com',
            'password' => 'password123',
        ]);

        $loginResponse->assertStatus(200)
            ->assertJsonPath('message', 'Login successful')
            ->assertJsonStructure(['token']);

        $this->assertDatabaseHas('users', ['email' => 'alice@example.com']);
    }

    public function test_authenticated_user_can_logout_via_api(): void
    {
        $user = User::factory()->create([
            'email' => 'logout@example.com',
            'password' => bcrypt('password123'),
        ]);

        $token = $user->createToken('test-token')->plainTextToken;

        $response = $this->withHeader('Authorization', 'Bearer ' . $token)
            ->postJson('/api/logout');

        $response->assertStatus(200)
            ->assertJsonPath('message', 'Logout successful');
    }
}
