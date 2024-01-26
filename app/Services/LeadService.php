<?php

namespace App\Services;

use App\Models\Lead;
use App\Repositories\LeadRepositoryInterface;

class LeadService
{
    private $leadRepository;

    public function __construct(LeadRepositoryInterface $leadRepository)
    {
        $this->leadRepository = $leadRepository;
    }

    public function createLead(array $data)
    {
        $lead = $this->leadRepository->create($data);

        return $lead;
    }

    public function findLead($id)
    {
        return $this->leadRepository->find($id);
    }

    public function updateLead(Lead $lead, array $data)
    {
        $this->leadRepository->update($lead, $data);
    }

    public function deleteLead(Lead $lead)
    {
        $this->leadRepository->delete($lead);
    }

    public function getLeadScore(Lead $lead)
    {

        return rand(1, 100); 
    }

    public function updateLeadScore(Lead $lead, $score)
    {
        $this->leadRepository->updateScore($lead, $score);
    }
}
