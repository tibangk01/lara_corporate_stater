<?php

namespace App\View\Components\Guest;

use App\Services\PageTitleService;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Layout extends Component
{
    public $pageTitle;

    public function __construct(PageTitleService $pageTitle)
    {
        $this->pageTitle = $pageTitle();
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
