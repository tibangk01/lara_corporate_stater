<?php

namespace App\View\Components\Guest;

use App\Models\HumanType;
use App\Models\MediaCategory;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $humanType;

    public $mediaCategory;

    public function __construct()
    {
        /**
         * media.link
         */
        $this->mediaCategory = MediaCategory::with(['media' => function($query){
            $query->where('mediaable_type', 'like', '%Section');
        }])->where('name', 'Testimonial')->get()[0];

        /**
         * client[avatar, message],
         * work.name,
         * human.fullname,
         */
        $this->humanType = HumanType::with(['humans.officials' => function($query){
            $query->with(['work', 'clients']);
        }])->where('name', 'Human customer')->get()[0];

    }

    public function render()
    {
        return view('components.guest.testimonial');
    }
}
