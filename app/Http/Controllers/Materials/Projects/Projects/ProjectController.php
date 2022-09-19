<?php


namespace App\Http\Controllers\Materials\Projects\Projects;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\Projects\Projects\Model\Project;
use App\Domain\Materials\Projects\Projects\Actions\StoreProjectAction;
use App\Domain\Materials\Projects\Projects\Actions\DestroyProjectAction;
use App\Domain\Materials\Projects\Projects\Actions\UpdateProjectAction;
use App\Domain\Materials\Projects\Projects\DTO\ProjectDTO;
use App\Http\Requests\Materials\Projects\Projects\StoreProjectRequest;
use App\Http\Requests\Materials\Projects\Projects\UpdateProjectRequest;
use App\Http\ViewModels\Materials\Projects\Projects\GetProjectVM;
use App\Http\ViewModels\Materials\Projects\Projects\GetAllProjectsVM;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllProjectsVM())->toArray()));
    }

    public function show(Project $project){

        return response()->json(Response::success((new GetProjectVM($project))->toArray()));
    }

    public function store(StoreProjectRequest $request){

        $data = $request->validated() ;

        $projectDTO = ProjectDTO::fromRequest($data);

        $project = StoreProjectAction::execute($projectDTO);

        return response()->json(Response::success((new GetProjectVM($project))->toArray()));
    }

    public function update(Project $project, UpdateProjectRequest $request){

        $data = $request->validated() ;

        $projectDTO = ProjectDTO::fromRequest($data);

        $project = UpdateProjectAction::execute($project, $projectDTO);

        return response()->json(Response::success((new GetProjectVM($project))->toArray()));
    }

    public function destroy(Project $project){

        return response()->json(Response::success(DestroyProjectAction::execute($project)));
    }

}
