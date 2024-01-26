<?php

namespace App\Repositories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Model;

class LeadRepository extends BaseRepository implements LeadRepositoryInterface
{
    public function __construct(Lead $lead)
    {
        parent::__construct($lead);
    }

    public function fillAndSave(Model $lead, array $data)
    {
        $lead->fill($data);
        $this->save($lead);

        return $lead;
    }

}
