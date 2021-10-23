<?php

namespace App\View\Components\Guest;

use App\Services\HeroService;
use Illuminate\View\Component;

class Hero extends Component
{
    public $corporation;
    public $heroBackgroud;
    public $youtubeLink;

    public function __construct(HeroService $service)
    {
        $this->corporation = $service->nameSlogan();
        $this->heroBackgroud = $service->heroBackground();
        $this->youtubeLink = $service->youtubeLink();
    }

    public function render()
    {
        return view('components.guest.hero');
    }
}
