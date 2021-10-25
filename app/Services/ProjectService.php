<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    protected $project;

    public function __construct(ProjectRepository $project)
    {
        $this->project = $project;
    }

    public function pageData()
    {
        return request()->input('id')
        ? $this->project->morphMediasDescriptionLinkwithProjectCategoryCustomer_EnterpriseOrClientWithOfficialHumanFindById()
        : $this->project->morphMediasDescriptionLinkwithProjectCategoryCustomer_EnterpriseOrClientWithOfficialHumanFind();
    }
}
