<?php

namespace App\Repositories;

use App\Models\Lead;

class LeadRepository extends BaseRepository implements LeadRepositoryInterface
{
    public function __construct(Lead $lead)
    {
        parent::__construct($lead);
    }

    // Specific Metod
    public function updateScore(Lead $lead, $score)
    {
        $lead->score = $score;
        $lead->save();

        return $lead;
    }
}
