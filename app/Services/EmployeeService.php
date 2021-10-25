<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;

class EmployeeService
{
    protected $employee;

    public function __construct(EmployeeRepository $employee)
    {
        $this->employee = $employee;
    }

    public function pageData()
    {
        return request()->input('id')
        ?  $this->employee->withOfficial_Work_HumanLinksLinkTypeIconfindById()
        :  $this->employee->withOfficial_Work_HumanLinksLinkTypeIconfind();
    }
}
