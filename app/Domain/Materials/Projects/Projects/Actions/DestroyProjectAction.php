<?php


namespace App\Domain\Materials\Projects\Projects\Actions;


use App\Domain\Materials\Projects\Projects\Model\Project;

class DestroyProjectAction
{
    public static function execute(
        Project $project
    ){
        $project->delete();
        return $project;
    }
}
