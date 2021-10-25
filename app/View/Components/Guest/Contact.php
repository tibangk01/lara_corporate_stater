<?php

namespace App\View\Components\Guest;

use Illuminate\View\Component;
use App\Services\ContactService;
use App\Services\SectionService;

class Contact extends Component
{
    public $geolocalizationLink;
    public $section;

    public function __construct(ContactService $contact, SectionService $section)
    {
        $this->geolocalizationLink = $contact->geolocalizationLink();
        $this->section = $section->contactSectionData();
    }

    public function render()
    {
        return view('components.guest.contact');
    }
}
