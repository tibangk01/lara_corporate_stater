<?php

namespace App\View\Components\Guest;

use App\Models\Corporation;
use App\Models\LogoCategory;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $corporation;

    public $linkType;

    public function __construct()
    {
        $corporation = Corporation::latest()->get(['name'])[0];
        $this->corporation = $corporation;

        // $corporation = LogoCategory::with(['logos' => function($query){
        //     $query->where('logoable_type', 'like', '%Corporation')->latest();
        // }])->where('name', 'corporation')->get()[0];
        // $this->linkType = $corporation;
    }

    public function render()
    {
        return view('components.guest.navigation');
    }
}
