<?php

namespace App\View\Components\Guest;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $pageTitle;

    public function __construct()
    {
        $this->pageTitle = request()->route()->named('service') ||request()->route()->named('privacy_policy')
            ? ucwords(Str::plural(Str::of(request()->route()->getName())->replace('_', ' ')))
            : ucwords(Str::of(request()->route()->getName())->replace('_', ' '));
    }


    public function render()
    {
        return view('components.guest.breadcrumb');
    }
}
