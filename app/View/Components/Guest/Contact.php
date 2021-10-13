<?php

namespace App\View\Components\Guest;

use App\Models\Link;
use App\Models\LinkType;
use App\Models\SitePage;
use App\Models\Corporation;
use Illuminate\View\Component;
use App\Models\Contact as ContactModel;
use App\Models\Team;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Contact extends Component
{
    public $sitePage;

    public $contacts;

    public $link;

    public function __construct()
    {
        $sitePage = SitePage::with(['section'])
            ->where('name', 'Contact')
            ->get()[0];
        $this->sitePage = $sitePage;

        $contacts = ContactModel::with(['contactType', 'iconableItem.icon'])
            ->get()
            ->shuffle();
        $this->contacts = $contacts;

        /**
         * link.url,
         * linkType.name = 'Geolocalization url',
         */

        //TODO: get inverse of this query with the same result + unicity constraint on site page name column
        $link = LinkType::with('links')
            ->where('name', 'Geolocalization url')
            ->get()[0];

        $this->link = $link;
    }

    public function render()
    {
        return view('components.guest.contact');
    }
}
