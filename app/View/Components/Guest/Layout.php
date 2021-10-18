<?php

namespace App\View\Components\Guest;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Layout extends Component
{
    public $pageTitle;

    public function __construct()
    {
        $this->pageTitle = ucwords(Str::of(request()->route()->getName())->replace('_', ' '));
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
