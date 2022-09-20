<?php


namespace App\Http\Controllers\Questions\QuestionToQuestion;



use App\Http\Controllers\Controller;
use App\Domain\Questions\QuestionToQuestion\Model\QuestionToQuestion;
use App\Domain\Questions\QuestionToQuestion\Actions\StoreQuestionToQuestionAction;
use App\Domain\Questions\QuestionToQuestion\Actions\DestroyQuestionToQuestionAction;
use App\Domain\Questions\QuestionToQuestion\Actions\UpdateQuestionToQuestionAction;
use App\Domain\Questions\QuestionToQuestion\DTO\QuestionToQuestionDTO;
use App\Http\Requests\Questions\QuestionToQuestion\StoreQuestionToQuestionRequest;
use App\Http\Requests\Questions\QuestionToQuestion\UpdateQuestionToQuestionRequest;
use App\Http\ViewModels\Questions\QuestionToQuestion\GetQuestionToQuestionVM;
use App\Http\ViewModels\Questions\QuestionToQuestion\GetAllQuestionToQuestionsVM;

class QuestionToQuestionController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllQuestionToQuestionsVM())->toArray()));
    }

    public function show(QuestionToQuestion $questionToQuestion){

        return response()->json(success((new GetQuestionToQuestionVM($questionToQuestion))->toArray()));
    }

    public function store(StoreQuestionToQuestionRequest $request){

        $data = $request->validated() ;

        $questionToQuestionDTO = QuestionToQuestionDTO::fromRequest($data);

        $questionToQuestion = StoreQuestionToQuestionAction::execute($questionToQuestionDTO);

        return response()->json(success((new GetQuestionToQuestionVM($questionToQuestion))->toArray()));
    }

    public function update(QuestionToQuestion $questionToQuestion, UpdateQuestionToQuestionRequest $request){

        $data = $request->validated() ;

        $questionToQuestionDTO = QuestionToQuestionDTO::fromRequest($data);

        $questionToQuestion = UpdateQuestionToQuestionAction::execute($questionToQuestion, $questionToQuestionDTO);

        return response()->json(success((new GetQuestionToQuestionVM($questionToQuestion))->toArray()));
    }

    public function destroy(QuestionToQuestion $questionToQuestion){

        return response()->json(success(DestroyQuestionToQuestionAction::execute($questionToQuestion)));
    }

}
