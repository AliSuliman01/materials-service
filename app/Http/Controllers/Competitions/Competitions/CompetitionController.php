<?php


namespace App\Http\Controllers\Competitions\Competitions;



use App\Http\Controllers\Controller;
use App\Domain\Competitions\Competitions\Model\Competition;
use App\Domain\Competitions\Competitions\Actions\StoreCompetitionAction;
use App\Domain\Competitions\Competitions\Actions\DestroyCompetitionAction;
use App\Domain\Competitions\Competitions\Actions\UpdateCompetitionAction;
use App\Domain\Competitions\Competitions\DTO\CompetitionDTO;
use App\Http\Requests\Competitions\Competitions\StoreCompetitionRequest;
use App\Http\Requests\Competitions\Competitions\UpdateCompetitionRequest;
use App\Http\ViewModels\Competitions\Competitions\GetCompetitionVM;
use App\Http\ViewModels\Competitions\Competitions\GetAllCompetitionsVM;

class CompetitionController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllCompetitionsVM())->toArray()));
    }

    public function show(Competition $competition){

        return response()->json(success((new GetCompetitionVM($competition))->toArray()));
    }

    public function store(StoreCompetitionRequest $request){

        $data = $request->validated() ;

        $competitionDTO = CompetitionDTO::fromRequest($data);

        $competition = StoreCompetitionAction::execute($competitionDTO);

        return response()->json(success((new GetCompetitionVM($competition))->toArray()));
    }

    public function update(Competition $competition, UpdateCompetitionRequest $request){

        $data = $request->validated() ;

        $competitionDTO = CompetitionDTO::fromRequest($data);

        $competition = UpdateCompetitionAction::execute($competition, $competitionDTO);

        return response()->json(success((new GetCompetitionVM($competition))->toArray()));
    }

    public function destroy(Competition $competition){

        return response()->json(success(DestroyCompetitionAction::execute($competition)));
    }

}
