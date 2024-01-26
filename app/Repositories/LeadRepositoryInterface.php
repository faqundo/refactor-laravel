<?php

namespace App\Repositories;

use App\Models\Lead;

interface LeadRepositoryInterface
{
    public function create(array $data);

    public function find($id);

    public function update(Lead $lead, array $data);

    public function delete(Lead $lead);

    public function updateScore(Lead $lead, $score);
}
