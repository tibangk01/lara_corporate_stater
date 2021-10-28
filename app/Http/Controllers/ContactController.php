<?php

namespace App\Http\Controllers;

use App\Services\ContactService;

class ContactController extends Controller
{
    public function __invoke(ContactService $contact)
    {
        return view('pages.contact', [
            'corporateName' => $contact->corporationName(),
            'corporationContacts' => $contact->corporationContacts(),
            'socialLinks' => $contact->socialLinks(),
        ]);
    }
}
