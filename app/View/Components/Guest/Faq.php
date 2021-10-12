<?php

namespace App\View\Components\Guest;

use App\Models\Faq as FaqModel;
use App\Models\SitePage;
use Illuminate\View\Component;

class Faq extends Component
{

    public $sitePage;

    public $faqs;

    public function __construct()
    {
        $sitePage = SitePage::with(['section'])
            ->where('name', 'Faq')
            ->get()[0];

        $this->sitePage = $sitePage;

        $faqs = FaqModel::with(['description' => function($query){

            $query->where('descriptionable_type', 'like', '%Faq');
            
        }])->get();

        $this->faqs = $faqs;
    }

    public function render()
    {
        return view('components.guest.faq');
    }
}
