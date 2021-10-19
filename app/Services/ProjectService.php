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

    public function pageData($id = null)
    {
        return $this->project->find($id);
    }
}
