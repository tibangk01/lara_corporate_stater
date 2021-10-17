<?php

namespace App\View\Components\Guest;

use App\Models\Section;
use Illuminate\View\Component;

class About extends Component
{
    public $section;

    public function __construct()
    {
        $this->section = Section::whereName('about')
            ->with(['descriptionable' => function ($query) {
                $query->select('id', 'descriptionable_id', 'title', 'subtitle', 'content');
            }, 'media' => function ($query) {
                $query->select('id', 'mediaable_id', 'link'); //TODO: change link --> url
            }, 'items' => function ($query) {
                $query->select('id', 'section_id')
                    ->with(['iconableItem' => function ($query) {
                        $query->select('id', 'item_id', 'icon_id', 'title', 'value')
                            ->with(['icon:id,class,is_extended']);
                    }]);
            }])
            ->get(['id', 'name', 'title', 'description'])->first();
    }

    public function render()
    {
        return view('components.guest.about');
    }
}
