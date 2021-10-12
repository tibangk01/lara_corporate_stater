<?php

namespace App\View\Components\Guest;

use App\Models\Pricing as PricingModel;
use App\Models\SitePage;
use Illuminate\View\Component;

class Pricing extends Component
{
    public $sitePage;

    public $pricings;

    public function __construct()
    {
        $sitePage = SitePage::with(['section'])
            ->where('name', 'Pricing')
            ->get()[0];

        $this->sitePage = $sitePage;

        /**
         * pricing.title,
         * pricing.month_price,
         * pricing.is_featured,
         * pricing.is_advanced,
         * currency.name,
         * feature_pricing.is_active,
         * feature_pricing.feature.content,
         **/
        $pricings = PricingModel::with(['currency', 'features'])->get();

        $this->pricings = $pricings;
    }


    public function render()
    {
        return view('components.guest.pricing');
    }
}
