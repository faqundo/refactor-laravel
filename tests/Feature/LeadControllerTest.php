<?php

use App\Models\User;
use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class LeadControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_lead()
    {
        Sanctum::actingAs(User::factory()->create());

        $response = $this->postJson('/api/leads', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '123456789',
        ]);

        $response->assertStatus(201);
    }

    public function test_it_can_get_all_leads()
    {
        Sanctum::actingAs(User::factory()->create());

        Lead::factory(3)->create();

        $response = $this->getJson('/api/leads');

        $response->assertStatus(200)
            ->assertJsonCount(3, 'data');
    }

}
