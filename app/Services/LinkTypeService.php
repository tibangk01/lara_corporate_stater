<?php

namespace App\Services;

use App\Repositories\LinkTypeRepository;

class LinkTypeService
{
    protected $linkType;

    public function __construct(LinkTypeRepository $linkType)
    {
        $this->linkType = $linkType;
    }
}
