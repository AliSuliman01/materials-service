<?php


namespace App\Http\Controllers\Competitions\CompetitionTypes;



use App\Http\Controllers\Controller;
use App\Domain\Competitions\CompetitionTypes\Model\CompetitionType;
use App\Domain\Competitions\CompetitionTypes\Actions\StoreCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\Actions\DestroyCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\Actions\UpdateCompetitionTypeAction;
use App\Domain\Competitions\CompetitionTypes\DTO\CompetitionTypeDTO;
use App\Http\Requests\Competitions\CompetitionTypes\StoreCompetitionTypeRequest;
use App\Http\Requests\Competitions\CompetitionTypes\UpdateCompetitionTypeRequest;
use App\Http\ViewModels\Competitions\CompetitionTypes\GetCompetitionTypeVM;
use App\Http\ViewModels\Competitions\CompetitionTypes\GetAllCompetitionTypesVM;

class CompetitionTypeController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllCompetitionTypesVM())->toArray()));
    }

    public function show(CompetitionType $competitionType){

        return response()->json(success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function store(StoreCompetitionTypeRequest $request){

        $data = $request->validated() ;

        $competitionTypeDTO = CompetitionTypeDTO::fromRequest($data);

        $competitionType = StoreCompetitionTypeAction::execute($competitionTypeDTO);

        return response()->json(success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function update(CompetitionType $competitionType, UpdateCompetitionTypeRequest $request){

        $data = $request->validated() ;

        $competitionTypeDTO = CompetitionTypeDTO::fromRequest($data);

        $competitionType = UpdateCompetitionTypeAction::execute($competitionType, $competitionTypeDTO);

        return response()->json(success((new GetCompetitionTypeVM($competitionType))->toArray()));
    }

    public function destroy(CompetitionType $competitionType){

        return response()->json(success(DestroyCompetitionTypeAction::execute($competitionType)));
    }

}
