<?php

namespace App\View\Components\Guest;

use App\Models\Section;
use App\Services\SectionService;
use Illuminate\View\Component;

class About extends Component
{
    public $section;

    public function __construct(SectionService $service)
    {
        $this->section = $service->aboutSectionData(); //TODO: change link --> url in db,
    }

    public function render()
    {
        return view('components.guest.about');
    }
}
