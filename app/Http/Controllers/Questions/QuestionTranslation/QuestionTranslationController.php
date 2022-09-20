<?php


namespace App\Http\Controllers\Questions\QuestionTranslation;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;
use App\Domain\Questions\QuestionTranslation\Actions\StoreQuestionTranslationAction;
use App\Domain\Questions\QuestionTranslation\Actions\DestroyQuestionTranslationAction;
use App\Domain\Questions\QuestionTranslation\Actions\UpdateQuestionTranslationAction;
use App\Domain\Questions\QuestionTranslation\DTO\QuestionTranslationDTO;
use App\Http\Requests\Questions\QuestionTranslation\StoreQuestionTranslationRequest;
use App\Http\Requests\Questions\QuestionTranslation\UpdateQuestionTranslationRequest;
use App\Http\ViewModels\Questions\QuestionTranslation\GetQuestionTranslationVM;
use App\Http\ViewModels\Questions\QuestionTranslation\GetAllQuestionTranslationsVM;

class QuestionTranslationController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllQuestionTranslationsVM())->toArray()));
    }

    public function show(QuestionTranslation $questionTranslation){

        return response()->json(Response::success((new GetQuestionTranslationVM($questionTranslation))->toArray()));
    }

    public function store(StoreQuestionTranslationRequest $request){

        $data = $request->validated() ;

        $questionTranslationDTO = QuestionTranslationDTO::fromRequest($data);

        $questionTranslation = StoreQuestionTranslationAction::execute($questionTranslationDTO);

        return response()->json(Response::success((new GetQuestionTranslationVM($questionTranslation))->toArray()));
    }

    public function update(QuestionTranslation $questionTranslation, UpdateQuestionTranslationRequest $request){

        $data = $request->validated() ;

        $questionTranslationDTO = QuestionTranslationDTO::fromRequest($data);

        $questionTranslation = UpdateQuestionTranslationAction::execute($questionTranslation, $questionTranslationDTO);

        return response()->json(Response::success((new GetQuestionTranslationVM($questionTranslation))->toArray()));
    }

    public function destroy(QuestionTranslation $questionTranslation){

        return response()->json(Response::success(DestroyQuestionTranslationAction::execute($questionTranslation)));
    }

}
