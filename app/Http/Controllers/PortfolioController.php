<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.portfolio');
    }
}
