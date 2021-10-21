<?php

namespace App\Repositories;

use App\Models\PrivacyPolicy;

class PrivacyPolicyRepository
{
    protected $privacyPolicy;

    public function __construct(PrivacyPolicy $privacyPolicy)
    {
        $this->privacyPolicy = $privacyPolicy;
    }

    public function findWithDescription()
    {
        return $this->privacyPolicy->with(['descriptions' => function ($query) {
            $query->select('id', 'descriptionable_id', 'title', 'content');
        }])->get(['id']);
    }
}
