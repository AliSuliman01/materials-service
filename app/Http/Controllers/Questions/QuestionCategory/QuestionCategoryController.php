<?php


namespace App\Http\Controllers\Questions\QuestionCategory;



use App\Http\Controllers\Controller;
use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;
use App\Domain\Questions\QuestionCategory\Actions\StoreQuestionCategoryAction;
use App\Domain\Questions\QuestionCategory\Actions\DestroyQuestionCategoryAction;
use App\Domain\Questions\QuestionCategory\Actions\UpdateQuestionCategoryAction;
use App\Domain\Questions\QuestionCategory\DTO\QuestionCategoryDTO;
use App\Http\Requests\Questions\QuestionCategory\StoreQuestionCategoryRequest;
use App\Http\Requests\Questions\QuestionCategory\UpdateQuestionCategoryRequest;
use App\Http\ViewModels\Questions\QuestionCategory\GetQuestionCategoryVM;
use App\Http\ViewModels\Questions\QuestionCategory\GetAllQuestionCategorysVM;

class QuestionCategoryController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllQuestionCategorysVM())->toArray()));
    }

    public function show(QuestionCategory $questionCategory){

        return response()->json(success((new GetQuestionCategoryVM($questionCategory))->toArray()));
    }

    public function store(StoreQuestionCategoryRequest $request){

        $data = $request->validated() ;

        $questionCategoryDTO = QuestionCategoryDTO::fromRequest($data);

        $questionCategory = StoreQuestionCategoryAction::execute($questionCategoryDTO);

        return response()->json(success((new GetQuestionCategoryVM($questionCategory))->toArray()));
    }

    public function update(QuestionCategory $questionCategory, UpdateQuestionCategoryRequest $request){

        $data = $request->validated() ;

        $questionCategoryDTO = QuestionCategoryDTO::fromRequest($data);

        $questionCategory = UpdateQuestionCategoryAction::execute($questionCategory, $questionCategoryDTO);

        return response()->json(success((new GetQuestionCategoryVM($questionCategory))->toArray()));
    }

    public function destroy(QuestionCategory $questionCategory){

        return response()->json(success(DestroyQuestionCategoryAction::execute($questionCategory)));
    }

}
