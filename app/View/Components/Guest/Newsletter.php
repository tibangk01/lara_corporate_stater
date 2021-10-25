<?php

namespace App\View\Components\Guest;

use App\Services\SectionService;
use Illuminate\View\Component;

class Newsletter extends Component
{

    public $section;

    public function __construct(SectionService $section)
    {
        $this->section = $section->newsletterSectionData();
    }

    public function render()
    {
        return view('components.guest.newsletter');
    }
}
