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
        return $this->leadRepository->save($this->leadRepository->create($data));
    }

    public function findLead($id)
    {
        return $this->leadRepository->get($id);
    }

    public function updateLead(Lead $lead, array $data)
    {
        $this->leadRepository->fillAndSave($lead, $data);
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
