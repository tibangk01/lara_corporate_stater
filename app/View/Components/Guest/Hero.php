<?php

namespace App\View\Components\Guest;

use App\Models\Link;
use App\Models\Media;
use App\Models\Corporation;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Hero extends Component
{
    public $media;

    public $link;

    public function __construct()
    {
        //TODO: constraint to get only hero and youtube link
        //TODO: refactor topHeader & navigation query
        //TODO: chek if is set data in topHeader & navigation
        $media = Media::query()
            ->with(['mediaable' => function (MorphTo $morphTo) {
                $morphTo->morphWith([
                    Corporation::class,
                ]);
            }])->get()[0];

        $link = Link::with('linkType.icon')
        ->whereIn('link_type_id', [5])
        ->get()[0];

        $this->media = $media;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.guest.hero');
    }
}
