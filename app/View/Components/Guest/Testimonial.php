<?php

namespace App\View\Components\Guest;

use App\Services\SectionService;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $section;

    public function __construct(SectionService $service)
    {
        $this->section = $service->testimonialSectionData();
    }

    public function render()
    {
        return view('components.guest.testimonial');
    }
}
