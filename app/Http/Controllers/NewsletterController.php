<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:newsletters', 'max:60'],
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }else{

            if(!Newsletter::create(['email' => $request->email]))
            {
                return response()->json(['status' => 2]);
            }

            return response()->json(['status' => 1]);
        }
    }
}
