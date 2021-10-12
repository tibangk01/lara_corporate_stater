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

    public $geolocalizationLink;

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

        $this->geolocalizationLink = "geolocalizationLink";
    }

    public function render()
    {
        return view('components.guest.contact');
    }
}
