<?php

namespace App\View\Components\Guest;

use App\Models\SocialIcon;
use Illuminate\View\Component;

class TopBar extends Component
{
    public $contacts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $contacts = SocialIcon::with('contactType')->get();

        dd($contacts);

        $this->contacts ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.guest.top-bar');
    }
}
