<?php

namespace App\View\Components\Guest;

use App\Models\Link;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\SiteSetting;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class TopBar extends Component
{
    public $contacts;

    public $sociaLinks;

    public function __construct()
    {
        //TODO: query by email & phone
        $contacts = Contact::with('contactType.icon')->get();

        //TODO: query using join to constraint for linkedin; facebook, twitter, instagram
        $sociaLinks = Link::with('linkType.icon')
            ->whereIn('link_type_id', [1, 2, 3, 4])
            ->get()
            ->shuffle();

        $this->contacts = $contacts;

        $this->sociaLinks = $sociaLinks;
    }

    public function render()
    {
        return view('components.guest.top-bar');
    }
}
