<?php

namespace App\View\Components\Guest;

use App\Services\SectionService;
use Illuminate\View\Component;

class Team extends Component
{

    public $section;

    public function __construct(SectionService $section)
    {
        $this->section = $section->teamSectiondata();
    }

    public function render()
    {
        return view('components.guest.team');
    }
}
