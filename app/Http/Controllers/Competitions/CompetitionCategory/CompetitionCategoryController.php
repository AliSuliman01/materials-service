<?php


namespace App\Http\Controllers\Competitions\CompetitionCategory;



use App\Http\Controllers\Controller;
use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;
use App\Domain\Competitions\CompetitionCategory\Actions\StoreCompetitionCategoryAction;
use App\Domain\Competitions\CompetitionCategory\Actions\DestroyCompetitionCategoryAction;
use App\Domain\Competitions\CompetitionCategory\Actions\UpdateCompetitionCategoryAction;
use App\Domain\Competitions\CompetitionCategory\DTO\CompetitionCategoryDTO;
use App\Http\Requests\Competitions\CompetitionCategory\StoreCompetitionCategoryRequest;
use App\Http\Requests\Competitions\CompetitionCategory\UpdateCompetitionCategoryRequest;
use App\Http\ViewModels\Competitions\CompetitionCategory\GetCompetitionCategoryVM;
use App\Http\ViewModels\Competitions\CompetitionCategory\GetAllCompetitionCategorysVM;

class CompetitionCategoryController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllCompetitionCategorysVM())->toArray()));
    }

    public function show(CompetitionCategory $competitionCategory){

        return response()->json(success((new GetCompetitionCategoryVM($competitionCategory))->toArray()));
    }

    public function store(StoreCompetitionCategoryRequest $request){

        $data = $request->validated() ;

        $competitionCategoryDTO = CompetitionCategoryDTO::fromRequest($data);

        $competitionCategory = StoreCompetitionCategoryAction::execute($competitionCategoryDTO);

        return response()->json(success((new GetCompetitionCategoryVM($competitionCategory))->toArray()));
    }

    public function update(CompetitionCategory $competitionCategory, UpdateCompetitionCategoryRequest $request){

        $data = $request->validated() ;

        $competitionCategoryDTO = CompetitionCategoryDTO::fromRequest($data);

        $competitionCategory = UpdateCompetitionCategoryAction::execute($competitionCategory, $competitionCategoryDTO);

        return response()->json(success((new GetCompetitionCategoryVM($competitionCategory))->toArray()));
    }

    public function destroy(CompetitionCategory $competitionCategory){

        return response()->json(success(DestroyCompetitionCategoryAction::execute($competitionCategory)));
    }

}
