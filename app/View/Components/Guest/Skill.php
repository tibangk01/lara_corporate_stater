<?php

namespace App\View\Components\Guest;

use App\Models\Skill as Skills;
use Illuminate\View\Component;

class Skill extends Component
{
    public $skills;

    public function __construct()
    {
        $skills = Skills::get(['title', 'value'])->shuffle();

        $this->skills = $skills;
    }


    public function render()
    {
        return view('components.guest.skill');
    }
}
