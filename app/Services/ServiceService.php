<?php

namespace App\Services;

use App\Repositories\ServiceRepository;

class ServiceService
{
    protected $service;

    public function __construct(ServiceRepository $service)
    {
        $this->service = $service;
    }

    public function pageData($id)
    {
        return $this->service->with_iconableItem_icon($id);
    }
}
