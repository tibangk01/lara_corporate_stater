<?php

namespace App\Services;

use App\Repositories\CorporationRepository;

class ContactService
{
    protected $contact;

    public function __construct(CorporationRepository $corporation)
    {
        $this->contact = $corporation;
    }

    public function geolocalizationLink()
    {
        return $this->contact->geolocalizationLink();
    }
}
