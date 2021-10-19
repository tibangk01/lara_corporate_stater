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

    public function with_iconableItem_icon($id = null)
    {
        return $this->service->when($id, function ($query, $id) {
            $query->whereId($id);
        })->with(['iconableItem' => function ($query) {
            $query->select(['id', 'icon_id', 'title', 'value',])
                ->with(['icon:id,class']);
        }])->get(['id', 'iconable_item_id']);
    }
}
