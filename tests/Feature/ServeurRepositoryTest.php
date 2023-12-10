<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ServeurRepositoryTest extends TestCase
{
public function test_the_application_returns_a_successful_response(): void

    {
       $data = [
           'name' => $this->faker->name,
           'email' => $this->faker->unique()->safeEmail,
           'password' => 'password',
       ];

       $response = $this->postJson('/api/users', $data);

       $this->assertDatabaseHas('users', $data);

       $response = $this->get('/');

        $response->assertStatus(500);
    }
   }



