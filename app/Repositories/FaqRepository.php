<?php

namespace App\Repositories;

use App\Models\Faq;

class FaqRepository
{
    protected $faq;

    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    public function find($id = null)
    {
       return;
    }
}
