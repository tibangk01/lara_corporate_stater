<?php

namespace App\View\Components\Guest;

use App\Models\Section;
use Illuminate\View\Component;
use App\Models\ProjectCategory;

class Portfolio extends Component
{
    public $section;

    public $projectCategories;

    public function __construct()
    {
        $this->section = Section::where('name', 'portfolio')
            ->with(['items' => function ($query) {
                $query->select(['id', 'section_id'])
                    ->with(['projects' => function ($query) {
                        $query->select('id', 'item_id', 'project_category_id')
                            ->with(['medias:id,mediaable_id,link', 'projectCategory:id,name']);
                    }]);
            }])->get(['id', 'name', 'title', 'description'])->first();

        $this->projectCategories = ProjectCategory::get();
    }

    public function render()
    {
        return view('components.guest.portfolio');
    }
}
