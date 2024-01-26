<?php

use App\Models\User;
use App\Models\Lead;
use App\Services\LeadService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class LeadServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_lead_and_update_score()
    {
        Sanctum::actingAs(User::factory()->create());

        $leadService = app(LeadService::class);

        $leadData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '123456789',
        ];

        $lead = $leadService->createLead($leadData);

        $this->assertInstanceOf(Lead::class, $lead);
        $this->assertNotNull($lead->id);

        $score = $leadService->getLeadScore($lead);
        $leadService->updateLeadScore($lead, $score);

        $this->assertNotNull($lead->score);
    }

}
