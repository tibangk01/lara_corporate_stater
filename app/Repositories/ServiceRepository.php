<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function find()
    {
        return $this->service->with(['iconableItem' => function ($q) {
            $q->select(['id', 'title']);
        }])->get(['id', 'iconable_item_id']);
    }

    public function fourFeaturedInRadomOrder()
    {
        return $this->service->whereIsFeatured(1)->with(['iconableItem' => function ($q) {
            $q->select(['id', 'icon_id'])
                ->with(['icon:id,class,is_extended']);
        }])->inRandomOrder()->take(4)->get(['id', 'iconable_item_id']);
    }
}
