<?php

namespace App\Repositories;

use App\Models\Section;

class SectionRepository
{
    protected $section;

    public function __construct(Section $section)
    {
        $this->section = $section;
    }

    public function about_morphMediaDescriptionWithItemIconableItemIcon()
    {
        return $this->section->whereName('about')
            ->with(['media' => function ($q) {
                $q->select(['id', 'mediaable_id', 'link']);
            }, 'descriptionable' => function ($q) {
                $q->select(['id', 'descriptionable_id', 'title', 'subtitle', 'content']);
            }, 'items' => function ($q) {
                $q->select(['id', 'section_id'])
                    ->with(['iconableItem' => function ($q) {
                        $q->select(['id', 'item_id', 'icon_id', 'title', 'value'])
                            ->with(['icon:id,class,is_extended']);
                    }]);
            }])->get(['id', 'name', 'title', 'description'])->first();
    }

    public function count_withItemIconableItemIcon()
    {
        return $this->section->whereName('count')
            ->with(['items' => function ($q) {
                $q->select(['id', 'section_id'])
                    ->with(['iconableItem' => function ($q) {
                        $q->select(['id', 'item_id', 'icon_id', 'title', 'value'])
                            ->with(['icon:id,class,is_extended']);
                    }]);
            }])->get(['id', 'name', 'title', 'description'])->first();
    }
}
