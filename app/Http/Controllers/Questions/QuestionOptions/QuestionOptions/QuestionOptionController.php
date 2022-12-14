<?php


namespace App\Http\Controllers\Questions\QuestionOptions\QuestionOptions;



use App\Http\Controllers\Controller;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Actions\StoreQuestionOptionAction;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Actions\DestroyQuestionOptionAction;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Actions\UpdateQuestionOptionAction;
use App\Domain\Questions\QuestionOptions\QuestionOptions\DTO\QuestionOptionDTO;
use App\Http\Requests\Questions\QuestionOptions\QuestionOptions\StoreQuestionOptionRequest;
use App\Http\Requests\Questions\QuestionOptions\QuestionOptions\UpdateQuestionOptionRequest;
use App\Http\ViewModels\Questions\QuestionOptions\QuestionOptions\GetQuestionOptionVM;
use App\Http\ViewModels\Questions\QuestionOptions\QuestionOptions\GetAllQuestionOptionsVM;

class QuestionOptionController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllQuestionOptionsVM())->toArray()));
    }

    public function show(QuestionOption $questionOption){

        return response()->json(success((new GetQuestionOptionVM($questionOption))->toArray()));
    }

    public function store(StoreQuestionOptionRequest $request){

        $data = $request->validated() ;

        $questionOptionDTO = QuestionOptionDTO::fromRequest($data);

        $questionOption = StoreQuestionOptionAction::execute($questionOptionDTO);

        return response()->json(success((new GetQuestionOptionVM($questionOption))->toArray()));
    }

    public function update(QuestionOption $questionOption, UpdateQuestionOptionRequest $request){

        $data = $request->validated() ;

        $questionOptionDTO = QuestionOptionDTO::fromRequest($data);

        $questionOption = UpdateQuestionOptionAction::execute($questionOption, $questionOptionDTO);

        return response()->json(success((new GetQuestionOptionVM($questionOption))->toArray()));
    }

    public function destroy(QuestionOption $questionOption){

        return response()->json(success(DestroyQuestionOptionAction::execute($questionOption)));
    }

}
