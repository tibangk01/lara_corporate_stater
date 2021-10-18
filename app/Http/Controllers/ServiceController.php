<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke(Request $request)
    {
        // dd($request->has('id'));
        return view('pages.service');
    }
}
