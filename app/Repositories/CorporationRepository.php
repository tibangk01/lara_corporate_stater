<?php

namespace App\Repositories;

use App\Models\LinkType;
use App\Models\Corporation;

class CorporationRepository
{
    protected $corporation;

    public function __construct(Corporation $corporation)
    {
        $this->corporation = $corporation;
    }

    public function addressPhone()
    {
        return $this->corporation->with(['contacts' => function ($query) {

            $query->select(['id', 'contact_type_id', 'contactable_id', 'value'])

                ->with(['contactType' => function ($query) {

                    $query->select(['id', 'icon_id', 'name'])

                        ->whereIn('name', ['email', 'phone'])

                        ->with(['icon:id,class,is_extended']);
                }]);
        }])->latest()->get(['id'])->first()

            ->contacts->filter(function ($contact) {

                return $contact->contactType;
            });
    }

    public function instagramFacebookLinkedinTwitter()
    {
        return $this->corporation->with(['links' => function ($q) {

            $q->select(['id', 'link_type_id', 'linkable_id', 'url'])

                ->with(['linkType' => function ($q) {

                    $q->select(['id', 'icon_id', 'name'])

                        ->whereIn('name', ['instagram', 'facebook', 'linkedin', 'twitter'])

                        ->with(['icon:id,class,is_extended']);
                }]);
        }])->latest()->get(['id'])->first()

            ->links->filter(function ($link) {

                return $link->linkType;
            })->shuffle();
    }

    public function heroBackground()
    {
        return $this->corporation->with(['medias' => function ($q) {

            $q->select(['id', 'media_category_id', 'mediaable_id', 'link'])

                ->with(['mediaCategory' => function ($q) {

                    $q->select(['id', 'name'])

                        ->whereName('hero');
                }]);
        }])->latest()->get(['id'])->first()->medias->filter(function ($media) {

            return $media->mediaCategory;
        })->first()->link;
    }

    public function geolocalizationLink()
    {
        return $this->corporation->with(['links' => function ($q) {

            $q->select(['id', 'link_type_id', 'linkable_id', 'url'])

                ->with(['linkType' => function ($q) {

                    $q->select(['id', 'name'])

                        ->whereName('geolocalization url');
                }]);
        }])->latest()->get(['id'])->first()->links->filter(function ($link) {

            return $link->linkType;
        })->first()->url;
    }

    public function logoLink()
    {
        return $this->corporation->with(['logo' => function ($q) {

            $q->select(['id', 'logoable_id', 'link']);
        }])->latest()->get(['id'])->first()->logo->link;
    }

    public function name()
    {
        return $this->corporation->latest()->get(['name'])->first()->name;
    }

    public function nameSlogan()
    {
        return $this->corporation->latest()->get(['name', 'slogan'])->first();
    }

    public function youtubeLink()
    {
        return $this->corporation->with(['links' => function ($q) {

            $q->select(['id', 'link_type_id', 'linkable_id', 'url'])

                ->with(['linkType' => function ($q) {

                    $q->select(['id', 'name'])

                        ->whereName('youtube');
                }]);
        }])->latest()->get(['id'])->first()->links->filter(function ($link) {

            return $link->linkType;
        })->first()->url;
    }

    public function addressEmailPhone()
    {
        return $this->corporation->with(['contacts' => function ($q) {
            $q->select(['id', 'contact_type_id', 'contactable_id', 'value'])
                ->with(['contactType' => function ($q) {
                    $q->select(['id', 'name'])
                        ->whereIn('name', ['address', 'email', 'phone']);
                }]);
        }])->latest()->get(['id', 'name'])->first()->contacts->filter(function ($contact) {
            return $contact->contactType;
        });
    }

    public function morphContacts_addressEmailPhoneWithIconMorphDescription()
    {
        return $this->corporation->with(['contacts' => function ($q) {
            $q->select(['id', 'contact_type_id', 'contactable_id', 'value'])
                ->with(['contactType' => function ($q) {
                    $q->select(['id', 'icon_id', 'name'])
                        ->whereIn('name', ['address', 'email', 'phone'])
                        ->with(['icon:id,class,is_extended']);
                }, 'description' => function ($q) {
                    $q->select(['id', 'descriptionable_id', 'title']);
                }]);
        }])->latest()->get(['id', 'name'])
            ->first()->contacts->filter(function ($contact) {
                return $contact->contactType;
            });
    }

    public function withFacebookInstagramLinkedinTwitterYoutubeWithIcons()
    {
        return $this->corporation->with(['links' => function ($q) {
            $q->select(['id', 'link_type_id', 'linkable_id', 'url'])
                ->whereIn('link_type_id', LinkType::whereIn('name', [
                    'linkedin', 'facebook', 'instagram', 'twitter', 'youtube'
                ])->pluck('id'))->with(['linkType' => function ($q) {
                    $q->select(['id', 'icon_id'])
                        ->with(['icon:id,class,is_extended']);
                }]);
        }])->latest()->get(['id'])->first()->links;
    }

}
