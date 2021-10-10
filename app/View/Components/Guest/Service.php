<?php

namespace App\View\Components\Guest;

use App\Models\Item;
use App\Models\Section;
use Illuminate\View\Component;

class Service extends Component
{
    public $section;

    public $items;

    public function __construct()
    {
        //TODO: improve query by section name

        $section = Section::whereSitePageId(3)
            ->get(['name', 'title', 'description'])[0];

        $this->section = $section;

        $items = Item::whereSectionId(1)
            ->with(['iconableItem.icon'])
            ->get()
            ->shuffle();

        $this->items = $items;
    }

    public function render()
    {
        return view('components.guest.service');
    }
}
