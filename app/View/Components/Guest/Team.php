<?php

namespace App\View\Components\Guest;

use App\Models\Employee;
use App\Models\Human;
use App\Models\Section;
use App\Models\SitePage;
use Illuminate\View\Component;

class Team extends Component
{
    /**
     * employee.profile,
     * human.fullName,
     * function.name,
     * links.url,
     * icons.class,
     */
    public $employees;

    public $sitePage;

    public function __construct()
    {
        $sitePage = SitePage::with(['section'])
            ->where('name', 'Team')->get()[0];
        $this->sitePage = $sitePage;

        // $section = Section::with(['sitePage'])->get()->dd();
        //TODO: eager load with multiple constraint on child

        $employees = Employee::with(['human.work'])
            ->with(['human.links' => function ($query) {
                $query->with(['linkType.icon'])
                    ->where('linkable_type', 'like', '%Human');
            }])->get();

        $this->employees = $employees;
    }


    public function render()
    {
        return view('components.guest.team');
    }
}
