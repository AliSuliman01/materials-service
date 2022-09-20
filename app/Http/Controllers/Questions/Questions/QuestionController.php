<?php


namespace App\Http\Controllers\Questions\Questions;



use App\Http\Controllers\Controller;
use App\Domain\Questions\Questions\Model\Question;
use App\Domain\Questions\Questions\Actions\StoreQuestionAction;
use App\Domain\Questions\Questions\Actions\DestroyQuestionAction;
use App\Domain\Questions\Questions\Actions\UpdateQuestionAction;
use App\Domain\Questions\Questions\DTO\QuestionDTO;
use App\Http\Requests\Questions\Questions\StoreQuestionRequest;
use App\Http\Requests\Questions\Questions\UpdateQuestionRequest;
use App\Http\ViewModels\Questions\Questions\GetQuestionVM;
use App\Http\ViewModels\Questions\Questions\GetAllQuestionsVM;

class QuestionController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllQuestionsVM())->toArray()));
    }

    public function show(Question $question){

        return response()->json(success((new GetQuestionVM($question))->toArray()));
    }

    public function store(StoreQuestionRequest $request){

        $data = $request->validated() ;

        $questionDTO = QuestionDTO::fromRequest($data);

        $question = StoreQuestionAction::execute($questionDTO);

        return response()->json(success((new GetQuestionVM($question))->toArray()));
    }

    public function update(Question $question, UpdateQuestionRequest $request){

        $data = $request->validated() ;

        $questionDTO = QuestionDTO::fromRequest($data);

        $question = UpdateQuestionAction::execute($question, $questionDTO);

        return response()->json(success((new GetQuestionVM($question))->toArray()));
    }

    public function destroy(Question $question){

        return response()->json(success(DestroyQuestionAction::execute($question)));
    }

}
