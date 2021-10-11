<?php

namespace App\View\Components\Guest;

use App\Models\Count as CountModel; //TODO: refactor skill model to SkillModel
use Illuminate\View\Component;

class Count extends Component
{
    public $counts;

    public function __construct()
    {
        $counts = CountModel::with('iconableItem.icon')
        ->get()
        ->shuffle();

        $this->counts = $counts;
    }

    public function render()
    {
        return view('components.guest.count');
    }
}
