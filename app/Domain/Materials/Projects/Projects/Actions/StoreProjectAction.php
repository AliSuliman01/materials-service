<?php


namespace App\Domain\Materials\Projects\Projects\Actions;


use App\Domain\Materials\Projects\Projects\DTO\ProjectDTO;
use App\Domain\Materials\Projects\Projects\Model\Project;

class StoreProjectAction
{
    public static function execute(
    ProjectDTO $projectDTO
    ){

        return Project::create(array_null_filter($projectDTO->toArray()));
    }
}
