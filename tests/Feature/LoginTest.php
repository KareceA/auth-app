<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_login_route()
    {
        $user = User::factory()->create([
            "name" => "El-Karece Asiedu",
            "email" => "ecerakle@gmail.com",
            "password" => "secret"
        ]);
        $response = $this->post('http://localhost:80/api/login', [
            "email" => $user->email,
            "password" => "secret"
        ]);

        $response->assertStatus(201);

    }
}
