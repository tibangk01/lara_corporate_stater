<?php

namespace App\View\Components\Guest;

use App\Models\Section;
use App\Models\LinkType;
use App\Models\SitePage;
use App\Models\Corporation;
use Illuminate\View\Component;

class Footer extends Component
{
    public $corporation;

    public $sitePages;

    public $section;

    public $linkTypes;

    public function __construct()
    {
        $this->corporation = Corporation::first()->with(['contacts' => function ($query) {
            $query->with(['contactType' => function ($query) {
                $query->whereIn('name', ['Email', 'Phone', 'Address']);
            }]);
        }])->get()[0];

        $this->sitePages = SitePage::orderBy('name')
            ->whereIn('name', [
                'about', 'privacy policy', 'team', 'services', 'contact', 'team', 'faq'
            ])
            ->get(['name']);

        $this->section = Section::with(['items.iconableItem'])
            ->where('name', 'service')
            ->get(['id', 'name'])[0];

        $this->linkTypes = LinkType::with(['links' => function ($query) {
            $query->where('linkable_type', 'like', '%Corporation');
        }, 'icon'])->whereIn('name', ['facebook', 'twitter', 'instagram', 'linkedin', 'skype', 'youtube'])
            ->get()->shuffle();
    }

    public function render()
    {
        return view('components.guest.footer');
    }
}
