<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;

class PortfolioController extends Controller
{
    public function __invoke(ProjectService $project)
    {
        return view('pages.portfolio', [
            'projects' => $project->pageData(request()->input('id'))
        ]);
    }
}
