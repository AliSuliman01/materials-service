<?php


namespace App\Http\Controllers\Questions\QuestionOptions\QuestionOptionTranslation;



use App\Http\Controllers\Controller;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Model\QuestionOptionTranslation;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions\StoreQuestionOptionTranslationAction;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions\DestroyQuestionOptionTranslationAction;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\Actions\UpdateQuestionOptionTranslationAction;
use App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\DTO\QuestionOptionTranslationDTO;
use App\Http\Requests\Questions\QuestionOptions\QuestionOptionTranslation\StoreQuestionOptionTranslationRequest;
use App\Http\Requests\Questions\QuestionOptions\QuestionOptionTranslation\UpdateQuestionOptionTranslationRequest;
use App\Http\ViewModels\Questions\QuestionOptions\QuestionOptionTranslation\GetQuestionOptionTranslationVM;
use App\Http\ViewModels\Questions\QuestionOptions\QuestionOptionTranslation\GetAllQuestionOptionTranslationsVM;

class QuestionOptionTranslationController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllQuestionOptionTranslationsVM())->toArray()));
    }

    public function show(QuestionOptionTranslation $questionOptionTranslation){

        return response()->json(success((new GetQuestionOptionTranslationVM($questionOptionTranslation))->toArray()));
    }

    public function store(StoreQuestionOptionTranslationRequest $request){

        $data = $request->validated() ;

        $questionOptionTranslationDTO = QuestionOptionTranslationDTO::fromRequest($data);

        $questionOptionTranslation = StoreQuestionOptionTranslationAction::execute($questionOptionTranslationDTO);

        return response()->json(success((new GetQuestionOptionTranslationVM($questionOptionTranslation))->toArray()));
    }

    public function update(QuestionOptionTranslation $questionOptionTranslation, UpdateQuestionOptionTranslationRequest $request){

        $data = $request->validated() ;

        $questionOptionTranslationDTO = QuestionOptionTranslationDTO::fromRequest($data);

        $questionOptionTranslation = UpdateQuestionOptionTranslationAction::execute($questionOptionTranslation, $questionOptionTranslationDTO);

        return response()->json(success((new GetQuestionOptionTranslationVM($questionOptionTranslation))->toArray()));
    }

    public function destroy(QuestionOptionTranslation $questionOptionTranslation){

        return response()->json(success(DestroyQuestionOptionTranslationAction::execute($questionOptionTranslation)));
    }

}
