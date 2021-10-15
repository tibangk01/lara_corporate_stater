<?php

namespace App\View\Components\Guest;

use App\Models\Link;
use App\Models\Team;
use App\Models\LinkType;
use App\Models\SitePage;
use App\Models\ContactType;
use App\Models\Corporation;
use Illuminate\View\Component;
use App\Models\Contact as ContactModel;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Contact extends Component
{
    public $sitePage;

    public $contactTypes;

    public $linkType;


    public function __construct()
    {

        $this->linkType = LinkType::where('name', 'Geolocalization url')
        ->with(['links' => function($query){
            $query->where('linkable_type', 'like', '%');
        }])->get()[0];


        /**
         * section.[name, title, description],
         *
         *  contactType[name]
         * contact[value]
         * description[tilte]
         */

        $this->contactTypes = ContactType::where(function ($query) {
            $query->whereIn('name', ['Email', 'Phone', 'Address']);
        })->with(['icon', 'contacts' => function($query){
            $query->with(['description' => function($query){
                $query->where('descriptionable_type', 'like', '%Contact');
            } ]);
        }])->get()->shuffle();


        $this->sitePage = SitePage::where('name', 'Contact')
        ->with(['section'])->get()[0];

        //TODO: get inverse of this query with the same result + unicity constraint on site page name column

    }

    public function render()
    {
        return view('components.guest.contact');
    }
}
