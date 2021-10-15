<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VisitorRequestController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:60'],
            'subject' => ['required', 'max:80'],
            'message' => ['required', 'max:255']
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            try {
                DB::beginTransaction();

                // insertion human and get id :

                // insert contact :

                // insert in visitor :

                // insert query :

                DB::commit();
                return response()->json(['status' => 1]);
            } catch (\Throwable $th) {
                DB::rollBack();
                return response()->json(['status' => 2]);
            }
        }
    }
}
