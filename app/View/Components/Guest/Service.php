<?php

namespace App\View\Components\Guest;

use App\Services\ServiceService;
use Illuminate\View\Component;

class Service extends Component
{
    public $services;

    public function __construct(ServiceService $service)
    {
        $this->services = $service->fourFeaturedInRadomOrder();
    }

    public function render()
    {
        return view('components.guest.service');
    }
}
