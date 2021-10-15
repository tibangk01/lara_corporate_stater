<?php

namespace App\View\Components\Guest;

use App\Models\SitePage;
use Illuminate\View\Component;

class Newsletter extends Component
{

    public $sitePage;

    public function __construct()
    {
        $this->sitePage = SitePage::with(['section' => function ($query) {
            $query->whereName('Newsletter');
        }])->where('name', 'Newsletter')
            ->get()[0];
    }

    public function render()
    {
        return view('components.guest.newsletter');
    }
}
