<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.service');
    }
}
