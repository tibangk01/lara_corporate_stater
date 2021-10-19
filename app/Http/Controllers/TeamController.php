<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;

class TeamController extends Controller
{
    public function __invoke(EmployeeService $employee)
    {
        return view('pages.team', ['employees' => $employee->pageData(request()->input('id'))]);
    }
}
