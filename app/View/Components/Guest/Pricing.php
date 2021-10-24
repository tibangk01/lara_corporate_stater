<?php

namespace App\View\Components\Guest;

use App\Services\SectionService;
use Illuminate\View\Component;

class Pricing extends Component
{
    public $section;

    public function __construct(SectionService $section)
    {
        $this->section = $section->pricingSectionData();
    }

    public function render()
    {
        return view('components.guest.pricing');
    }
}
