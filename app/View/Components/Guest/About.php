<?php

namespace App\View\Components\Guest;

use App\Models\Item;
use App\Models\Media;
use App\Models\Section;
use App\Models\Description;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class About extends Component
{
    public $items;

    public $description;

    public $media;

    public function __construct()
    {
        /**
         * section.name,
         * section.title,
         * section.description,
         *
         * descriptionable.title,
         * descriptionable.subtitle,
         * descriptionable.content,
         */

        //TODO: improve querys

        $description = Description::query()
            ->with(['descriptionable' => function (MorphTo $morphTo) {
                $morphTo->morphWith([
                    Section::class,
                ]);
            }])
            ->where('descriptionable_type', 'App\\Models\\Section')
            ->get()[0];

        $this->description = $description;

        /**
         * icon.class,
         * icon.is_extended,
         * iconableItem.
         */
        $items = Item::with(['iconableItem.icon'])
        ->whereItemTypeId(2)
        ->get();

        $this->items = $items;

        $media = Media::where('mediaable_type', 'App\\Models\\Section')
        ->get('link')[0];

        $this->media = $media;
    }

    public function render()
    {
        return view('components.guest.about');
    }
}
