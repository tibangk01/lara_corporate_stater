<?php

namespace App\View\Components\Guest;

use App\Models\Enterprise;
use Illuminate\View\Component;

class Client extends Component
{
    public $enterprises;

    public function __construct()
    {
        $enterprises = Enterprise::with(['logo' => function ($query) {
            $query->select('id', 'logoable_id', 'link');
        }])->get(['id'])->shuffle();

        $this->enterprises = $enterprises;
    }

    public function render()
    {
        return view('components.guest.client');
    }
}
