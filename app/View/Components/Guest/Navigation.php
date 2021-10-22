<?php

namespace App\View\Components\Guest;

use App\Models\Corporation;
use App\Services\NavigationService;
use Illuminate\View\Component;

class Navigation extends Component
{
    // public $corporationLogo;
    public $corporationName;

    public function __construct(NavigationService $service)
    {
        // $this->corporationLogo = $service->corporationLogo();
        $this->corporationName = $service->corporationName();

    }

    public function render()
    {
        return view('components.guest.navigation');
    }
}
