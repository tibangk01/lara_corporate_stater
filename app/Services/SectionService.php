<?php

namespace App\Services;

use App\Repositories\SectionRepository;

class SectionService
{
    protected $section;

    public function __construct(SectionRepository $section)
    {
        $this->section = $section;
    }

    public function aboutSectionData()
    {
        return $this->section->about_morphMediaDescriptionWithItemIconableItemIcon();
    }

    public function countSectionData()
    {
        return $this->section->count_withItemIconableItemIcon();
    }
}
