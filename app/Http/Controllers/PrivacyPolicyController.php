<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.privacy-policy');
    }

    //TODO: design the db schema img
}
