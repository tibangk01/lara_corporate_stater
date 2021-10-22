<?php

namespace App\Repositories;

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
}
