<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Services\ValidatorService;

class NewsletterController extends Controller
{
    public function __invoke(Request $request, ValidatorService $validator)
    {
        return $validator->makeNewsletterRequest($request)->fails()
            ? response()->json([
                'status' => 0,
                'error' => $validator->makeNewsletterRequest($request)
                    ->errors()
                    ->toArray()
            ])
            : (Newsletter::create([
                'email' => $request->newsletter_email
            ]) ? response()->json(['status' => 1]) : response()->json(['status' => 2]));
    }
}
