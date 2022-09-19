<?php

namespace App\Domain\Materials\Projects\Projects\Actions;

use App\Domain\Materials\Projects\Projects\DTO\ProjectDTO;
use App\Domain\Materials\Projects\Projects\Model\Project;

class UpdateProjectAction
{

    public static function execute(
        Project $project,ProjectDTO $projectDTO
    ){
        $project->update(array_null_filter($projectDTO->toArray()));
        return $project;
    }
}
