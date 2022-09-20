<?php


namespace App\Http\Controllers\Lessons;


use App\Http\Controllers\Controller;
use App\Domain\Lessons\Model\Lesson;
use App\Domain\Lessons\Actions\StoreLessonAction;
use App\Domain\Lessons\Actions\DestroyLessonAction;
use App\Domain\Lessons\Actions\UpdateLessonAction;
use App\Domain\Lessons\DTO\LessonDTO;
use App\Http\Requests\Lessons\StoreLessonRequest;
use App\Http\Requests\Lessons\UpdateLessonRequest;
use App\Http\ViewModels\Lessons\GetLessonVM;
use App\Http\ViewModels\Lessons\GetAllLessonsVM;

class LessonController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(success((new GetAllLessonsVM())->toArray()));
    }

    public function show(Lesson $lesson){

        return response()->json(success((new GetLessonVM($lesson))->toArray()));
    }

    public function store(StoreLessonRequest $request){

        $data = $request->validated() ;

        $lessonDTO = LessonDTO::fromRequest($data);

        $lesson = StoreLessonAction::execute($lessonDTO);

        return response()->json(success((new GetLessonVM($lesson))->toArray()));
    }

    public function update(Lesson $lesson, UpdateLessonRequest $request){

        $data = $request->validated() ;

        $lessonDTO = LessonDTO::fromRequest($data);

        $lesson = UpdateLessonAction::execute($lesson, $lessonDTO);

        return response()->json(success((new GetLessonVM($lesson))->toArray()));
    }

    public function destroy(Lesson $lesson){

        return response()->json(success(DestroyLessonAction::execute($lesson)));
    }

}
