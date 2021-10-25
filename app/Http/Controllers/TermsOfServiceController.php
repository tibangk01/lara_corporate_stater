<?php

namespace App\Http\Controllers;

class TermsOfServiceController extends Controller
{
    public function __invoke()
    {
        return view('pages.terms-of-service');
    }
}
