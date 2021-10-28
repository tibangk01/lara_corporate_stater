<?php

namespace App\Services;

use App\Repositories\CorporationRepository;
use App\Repositories\EnterpriseRepository;

class ContactService
{
    protected $corporation;
    protected $enterprise;

    public function __construct(CorporationRepository $corporation, EnterpriseRepository $enterprise)
    {
        $this->corporation = $corporation;
        $this->enterprise = $enterprise;
    }

    public function geolocalizationLink()
    {
        return $this->corporation->geolocalizationLink();
    }

    public function corporationName()
    {
        return $this->corporation->name();
    }

    public function socialLinks()
    {
        return $this->corporation->withFacebookInstagramLinkedinTwitterYoutubeWithIcons();
    }

    public function corporationContacts()
    {
        return $this->corporation->morphContacts_addressEmailPhoneWithIconMorphDescription();
    }

}
