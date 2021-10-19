<?php

namespace App\Http\Controllers;

use App\Services\FaqService;

class FaqController extends Controller
{
    public function __invoke(FaqService $faq)
    {
        dd($faq->pageData(request()->input('id')));
        return view('pages.faq');

    }
}
