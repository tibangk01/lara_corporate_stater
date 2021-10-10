<?php

namespace App\View\Components\Guest;

use App\Models\Corporation;
use Illuminate\View\Component;

class Navigation extends Component
{
    public $corporation;

    public function __construct()
    {
        $corporation = Corporation::first()->get(['name'])[0];
        
        $this->corporation = $corporation;
    }

    public function render()
    {
        return view('components.guest.navigation');
    }
}
