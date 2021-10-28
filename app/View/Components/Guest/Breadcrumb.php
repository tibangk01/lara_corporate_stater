<?php

namespace App\View\Components\Guest;

use Illuminate\View\Component;
use App\Services\BreadcrumbService;

class Breadcrumb extends Component
{
    public $title;

    public function __construct(BreadcrumbService $breadcrumb)
    {
        $this->title = $breadcrumb();
    }

    public function render()
    {
        return view('components.guest.breadcrumb');
    }
}
