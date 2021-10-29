<?php

namespace App\Repositories;

use App\Models\Corporation;
use App\Models\TermsOfService;

class TermsOfServiceRepository
{
    protected $termsOfService;

    public function __construct(TermsOfService $termsOfService)
    {
        $this->termsOfService = $termsOfService;
    }

    public function whereLastCorporationWithDescriptions()
    {
        return $this->termsOfService->with(['corporation' => function($q){
            $q->select('id')->whereId(Corporation::latest()->pluck('id'));
        }, 'descriptions' => function($q){
            $q->select(['id', 'descriptionable_id', 'title', 'content']);
        }])->get(['id', 'corporation_id', 'intro'])->first();
    }
}
