<?php

namespace App\Http\Controllers;

use App\Services\PrivacyPolicyService;

class PrivacyPolicyController extends Controller
{
    public function __invoke(PrivacyPolicyService $privacyPolicy)
    {
        return view('pages.privacy-policy', [
            'privacyPolicies' => $privacyPolicy->pageData()
        ]);
    }

    //TODO: design the db schema img
}
