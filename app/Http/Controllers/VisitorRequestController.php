<?php

namespace App\Http\Controllers;

use App\Models\Human;
use App\Models\Contact;
use App\Models\Visitor;
use App\Models\HumanType;
use App\Models\ContactType;
use App\Models\Corporation;
use App\Models\Questioning;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VisitorRequestController extends Controller
{
    public function __invoke()
    {
        $validator = Validator::make(request()->all(), [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:60', 'unique:contacts,value'],
            'subject' => ['required', 'max:80'],
            'message' => ['required', 'max:255']
        ]);

        if ($validator->fails()) {

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            try {

                DB::beginTransaction();

                $human = Human::create([
                    'human_type_id' => HumanType::where('name', 'visitor')->get('id')->first()->id,
                    'corporation_id' => Corporation::where('name', 'Corporate')->get('id')->first()->id,
                    'first_name' => request()->first_name,
                    'last_name' => request()->last_name,
                ]);

                DB::commit();

                if (
                    Questioning::create([
                        'visitor_id' => Visitor::create(['human_id' => $human->id])->id,
                        'subject' => request()->subject,
                        'message' => request()->message,
                    ])

                    &&

                    Contact::create([
                        'contact_type_id' => ContactType::where('name', 'Email')->get('id')->first()->id,
                        'contactable_id' => $human->id,
                        'contactable_type' => 'App\\Models\\Human',
                        'value' => request()->email,
                    ])
                ) {
                    DB::commit();
                    return response()->json(['status' => 1]);
                }
            } catch (\Throwable $th) {
                DB::rollBack();
                return response()->json(['status' => 2]);
            }
        }
    }
}
