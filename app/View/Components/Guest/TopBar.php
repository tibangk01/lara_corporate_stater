<?php

namespace App\View\Components\Guest;

use App\Models\SiteSetting;
use Illuminate\View\Component;

class TopBar extends Component
{
    public $siteSettings;

    public function __construct()
    {
        $siteSettings = SiteSetting::with('contacts')
            ->first()
            ->get();

        $this->siteSettings = $siteSettings;
    }

    public function render()
    {
        return view('components.guest.top-bar');
    }
}
