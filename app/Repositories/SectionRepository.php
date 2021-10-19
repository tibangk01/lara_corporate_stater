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

    public function forAbout()
    {
        return $this->section->whereName('About')
            ->with([
                'descriptionable' => function ($query) {
                    $query->select(['id', 'descriptionable_id', 'title', 'subtitle', 'content']);
                }, 'media' => function ($query) {
                    $query->select(['id', 'mediaable_id', 'link']);
                }
            ])->get(['id'])->first();
    }

    public function forService()
    {
        return  $this->section->whereName('Service')
            ->with(['items' => function ($query) {
                $query->select(['id', 'section_id'])
                    ->with(['iconableItem' => function ($query) {
                        $query->select(['id', 'item_id', 'icon_id', 'title', 'value'])
                            ->with(['icon:id,class,is_extended']);
                    }]);
            }])->get(['id'])->first();
    }
}
