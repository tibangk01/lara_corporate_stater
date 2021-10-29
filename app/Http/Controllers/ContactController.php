<?php

namespace App\Http\Controllers;

use App\Services\CorporationService;

class ContactController extends Controller
{
    public function __invoke(CorporationService $corporation)
    {
        //TODO: resolve eager loading.
        return view('pages.contact', [
            'corporationName' => $corporation->name(),
            'corporationContacts' => $corporation->contacts(),
            'corporationSocialLinks' => $corporation->socialLinks(),
        ]);
    }
}
