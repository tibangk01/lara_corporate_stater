<?php

namespace App\View\Components\Guest;

use App\Services\CountService;
use Illuminate\View\Component;
use App\Services\SectionService;
use App\Models\Count as CountModel;

class Count extends Component
{
    public $section;

    public function __construct(SectionService $service)
    {
        $this->section = $service->countSectionData();
    }

    public function render()
    {
        return view('components.guest.count');
    }
}
