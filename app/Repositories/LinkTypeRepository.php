<?php

namespace App\Repositories;

use App\Models\LinkType;

class LinkTypeRepository
{
    protected $linkType;

    public function __construct(LinkType $linkType)
    {
        $this->linkType = $linkType;
    }
}
