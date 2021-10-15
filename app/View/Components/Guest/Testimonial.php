<?php

namespace App\View\Components\Guest;

use App\Models\Buyer;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $buyers;

    public function __construct()
    {
        /**
         * buyer.avatar,
         * buyer.message,
         * human.first_name,
         * human.last_name,
         * function.name,
         */
        // $buyers = Buyer::with('human.work')->get();

        // $this->buyers = $buyers;
    }

    public function render()
    {
        return view('components.guest.testimonial');
    }
}
