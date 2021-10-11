<?php

namespace App\View\Components\Guest;

use App\Models\Enterprise;
use Illuminate\View\Component;

class Client extends Component
{
    //TODO: corporate with logo morphs + db comment

    public $enterprises;

    public function __construct()
    {
        $enterprises = Enterprise::with('logo')
            ->get()
            ->shuffle();

        $this->enterprises = $enterprises;
    }

    public function render()
    {
        return view('components.guest.client');
    }
}
