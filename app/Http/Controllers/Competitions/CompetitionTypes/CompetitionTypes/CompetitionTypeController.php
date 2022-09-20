<?php


namespace App\Http\Controllers\Competitions\CompetitionTypes\CompetitionTypes;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions\StoreCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions\DestroyCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Actions\UpdateCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\DTO\CompetitionTypeDTO;
use App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypes\StoreCompetitionTypeRequest;
use App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypes\UpdateCompetitionTypeRequest;
use App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypes\GetCompetitionTypeVM;
use App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypes\GetAllCompetitionTypesVM;

class CompetitionTypeController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllCompetitionTypesVM())->toArray()));
    }

    public function show(CompetitionType $competitionType){

        return response()->json(Response::success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function store(StoreCompetitionTypeRequest $request){

        $data = $request->validated() ;

        $competitionTypeDTO = CompetitionTypeDTO::fromRequest($data);

        $competitionType = StoreCompetitionTypeAction::execute($competitionTypeDTO);

        return response()->json(Response::success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function update(CompetitionType $competitionType, UpdateCompetitionTypeRequest $request){

        $data = $request->validated() ;

        $competitionTypeDTO = CompetitionTypeDTO::fromRequest($data);

        $competitionType = UpdateCompetitionTypeAction::execute($competitionType, $competitionTypeDTO);

        return response()->json(Response::success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function destroy(CompetitionType $competitionType){

        return response()->json(Response::success(DestroyCompetitionTypeAction::execute($competitionType)));
    }

}
