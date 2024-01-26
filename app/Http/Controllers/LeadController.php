<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Services\LeadService;
use Illuminate\Http\Request;
use App\Http\Requests\LeadStoreRequest;

class LeadController extends Controller
{
    private $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(LeadStoreRequest $request)
    {
        $data = $request->validated();

        $lead = $this->leadService->createLead($data);

        $score = $this->leadService->getLeadScore($lead);
        $this->leadService->updateLeadScore($lead, $score);

        return 'Lead created successfully';
    }

    public function show($id)
    {
        $lead = $this->leadService->findLead($id);

        if (!$lead) {
            return 'Lead not found';
        }

        return view('leads.show', ['lead' => $lead]);
    }

    public function edit($id)
    {
        $lead = $this->leadService->findLead($id);

        if (!$lead) {
            return 'Lead not found';
        }

        return view('leads.edit', ['lead' => $lead]);
    }

    public function update(Request $request, Lead $lead)
    {
        if (!$lead) {
            return 'Lead not found';
        }

        $this->leadService->updateLead($lead, $request->all());

        $score = $this->leadService->getLeadScore($lead);

        return 'Lead updated successfully';
    }

    public function destroy($id)
    {
        $lead = $this->leadService->findLead($id);

        if (!$lead) {
            return 'Lead not found';
        }

        $this->leadService->deleteLead($lead);

        return 'Lead deleted successfully';
    }
}
