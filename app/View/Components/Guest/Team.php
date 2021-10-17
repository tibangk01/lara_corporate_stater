<?php

namespace App\View\Components\Guest;

use App\Models\Human;
use App\Models\Section;
use App\Models\Employee;
use App\Models\SitePage;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Team extends Component
{
    public $employees;

    public $sitePage;

    public $section;

    public function __construct()
    {
        $this->section = Section::whereName('team')
            ->with(['items' => function ($query) {
                $query->select('id', 'section_id')
                    ->with(['employee' => function ($query) {
                        $query->select('id', 'item_id', 'official_id', 'profile')
                            ->with(['official' => function ($query) {
                                $query->select('id', 'work_id', 'human_id')
                                    ->with(['work:id,name', 'human' => function ($query) {
                                        $query->select('id', 'first_name', 'last_name')
                                            ->with(['links' => function ($query) {
                                                $query->select('id', 'link_type_id', 'linkable_id', 'url')
                                                    ->with(['linkType' => function($query){
                                                        $query->select('id','icon_id')
                                                            ->with(['icon:id,class']);
                                                    }]);
                                            }]);
                                    }]);
                            }]);
                    }]);
            }])->get()->first();
            //->get(['id', 'name', 'title', 'description'])
    }


    public function render()
    {
        return view('components.guest.team');
    }
}
