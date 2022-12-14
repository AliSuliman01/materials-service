<?php


namespace App\Http\Controllers\Competitions\CompetitionTypes\CompetitionTypeTranslation;



use App\Http\Controllers\Controller;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions\StoreCompetitionTypeTranslationAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions\DestroyCompetitionTypeTranslationAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Actions\UpdateCompetitionTypeTranslationAction;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\DTO\CompetitionTypeTranslationDTO;
use App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypeTranslation\StoreCompetitionTypeTranslationRequest;
use App\Http\Requests\Competitions\CompetitionTypes\CompetitionTypeTranslation\UpdateCompetitionTypeTranslationRequest;
use App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypeTranslation\GetCompetitionTypeTranslationVM;
use App\Http\ViewModels\Competitions\CompetitionTypes\CompetitionTypeTranslation\GetAllCompetitionTypeTranslationsVM;

class CompetitionTypeTranslationController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllCompetitionTypeTranslationsVM())->toArray()));
    }

    public function show(CompetitionTypeTranslation $competitionTypeTranslation){

        return response()->json(success((new GetCompetitionTypeTranslationVM($competitionTypeTranslation))->toArray()));
    }

    public function store(StoreCompetitionTypeTranslationRequest $request){

        $data = $request->validated() ;

        $competitionTypeTranslationDTO = CompetitionTypeTranslationDTO::fromRequest($data);

        $competitionTypeTranslation = StoreCompetitionTypeTranslationAction::execute($competitionTypeTranslationDTO);

        return response()->json(success((new GetCompetitionTypeTranslationVM($competitionTypeTranslation))->toArray()));
    }

    public function update(CompetitionTypeTranslation $competitionTypeTranslation, UpdateCompetitionTypeTranslationRequest $request){

        $data = $request->validated() ;

        $competitionTypeTranslationDTO = CompetitionTypeTranslationDTO::fromRequest($data);

        $competitionTypeTranslation = UpdateCompetitionTypeTranslationAction::execute($competitionTypeTranslation, $competitionTypeTranslationDTO);

        return response()->json(success((new GetCompetitionTypeTranslationVM($competitionTypeTranslation))->toArray()));
    }

    public function destroy(CompetitionTypeTranslation $competitionTypeTranslation){

        return response()->json(success(DestroyCompetitionTypeTranslationAction::execute($competitionTypeTranslation)));
    }

}
