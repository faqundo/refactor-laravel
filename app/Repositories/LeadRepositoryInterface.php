<?php

namespace App\Repositories;

use App\Models\Lead;

interface LeadRepositoryInterface
{
    public function all();

    public function get(int $id);

    public function save(Model $model);

    public function delete(Model $model);

    public function fillAndSave(Model $lead, array $data);
}
