<?php

namespace App\View\Components\Guest;

use App\Models\Contact;
use App\Models\Human;
use App\Models\LinkType;
use App\Models\HumanType;
use App\Models\ContactType;
use App\Models\Corporation;
use App\Models\Questioning;
use App\Models\Visitor;
use Illuminate\View\Component;

class TopBar extends Component
{
    public $contactTypes;

    public $linkTypes;

    public function __construct()
    {
        // Clean namespaces

        $this->contactTypes = ContactType::where(function ($query) {
            $query->whereIn('name', ['Email', 'Phone']);
        })->with(['contacts', 'icon'])->get();

        $this->linkTypes = LinkType::whereIn('name', [
            'Facebook', 'Twitter', 'Instagram', 'Linkedin'
        ])->with(['icon', 'links' => function ($query) {
            $query->where('linkable_type', 'like', '%Corporation');
        }])->get()->shuffle();

    }

    public function render()
    {
        return view('components.guest.top-bar');
    }
}
