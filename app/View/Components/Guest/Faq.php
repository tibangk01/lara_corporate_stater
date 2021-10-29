<?php

namespace App\View\Components\Guest;

use App\Services\SectionService;
use Illuminate\View\Component;

class Faq extends Component
{
    public $section;

    public function __construct(SectionService $section)
    {
        $this->section = $section->faqSectionData();
    }

    public function render()
    {
        return view('components.guest.faq');
    }
}
