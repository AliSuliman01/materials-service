<?php


namespace App\Http\ViewModels\Materials\Projects\Projects;

use App\Domain\Materials\Projects\Projects\Model\Project;
use Illuminate\Contracts\Support\Arrayable;

class GetAllProjectsVM implements Arrayable
{
    public function toArray()
    {
        return Project::query()->get();
    }
}
