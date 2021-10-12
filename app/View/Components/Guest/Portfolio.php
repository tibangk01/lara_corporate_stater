<?php

namespace App\View\Components\Guest;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Section;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public $section;

    public $projectCategories;

    public $projects;

    public function __construct()
    {

        $this->section = Section::whereSitePageId(4)->get()[0];

        $this->projectCategories = ProjectCategory::get('name')->shuffle();

        $projects = Project::with(['media' => function ($query) {

            $query->where('mediaable_type', 'like', '%Project');

        }])->with(['description' => function ($query) {

            $query->where('descriptionable_type', 'like', '%Project');

        }])->with(['projectCategory'])->get();

        $this->projects = $projects;
    }

    public function render()
    {
        return view('components.guest.portfolio');
    }
}
