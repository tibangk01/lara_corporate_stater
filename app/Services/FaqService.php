<?php

namespace App\Services;

use App\Repositories\FaqRepository;

class FaqService
{
    protected $faq;

    public function __construct(FaqRepository $faq)
    {
        $this->faq = $faq;
    }

    public function pageData($id = null)
    {
        return $this->faq->find($id);
    }
}
