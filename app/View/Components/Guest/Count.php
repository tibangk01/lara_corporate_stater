<?php

namespace App\View\Components\Guest;

use App\Models\Count as CountModel;
use Illuminate\View\Component;

class Count extends Component
{
    public $counts;

    public function __construct()
    {
        $counts = CountModel::with(['iconableItem' => function ($query) {
            $query->select('id', 'icon_id', 'title', 'value')
                ->with(['icon:id,class']);
        }])->get(['id', 'iconable_item_id']);

        $this->counts = $counts;
    }

    public function render()
    {
        return view('components.guest.count');
    }
}
