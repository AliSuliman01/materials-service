<?php


namespace App\Http\ViewModels\Materials\Projects\Projects;

use App\Domain\Materials\Projects\Projects\Model\Project;
use Illuminate\Contracts\Support\Arrayable;


class GetProjectVM implements Arrayable
{

    private $project;

    public function __construct($project)
    {
        $this->project = $project;
    }

    public function toArray()
    {
        return  $this->project;
    }
}
