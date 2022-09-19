<?php


namespace App\Http\Controllers\Materials\Courses\Courses;

use App\Http\Controllers\Controller;
use App\Domain\Materials\Courses\Courses\Model\Course;
use App\Domain\Materials\Courses\Courses\Actions\StoreCoursesAction;
use App\Domain\Materials\Courses\Courses\Actions\DestroyCoursesAction;
use App\Domain\Materials\Courses\Courses\Actions\UpdateCoursesAction;
use App\Domain\Materials\Courses\Courses\DTO\CoursesDTO;
use App\Http\Requests\Materials\Courses\Courses\StoreCoursesRequest;
use App\Http\Requests\Materials\Courses\Courses\UpdateCoursesRequest;
use App\Http\ViewModels\Materials\Courses\Courses\GetCoursesVM;
use App\Http\ViewModels\Materials\Courses\Courses\GetAllCoursessVM;

class CoursesController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllCoursessVM())->toArray()));
    }

    public function show(Course $course){

        return response()->json(success((new GetCoursesVM($course))->toArray()));
    }

    public function store(StoreCoursesRequest $request){

        $data = $request->validated() ;

        $courseDTO = CoursesDTO::fromRequest($data);

        $course = StoreCoursesAction::execute($courseDTO);

        return response()->json(success((new GetCoursesVM($course))->toArray()));
    }

    public function update(Course $course, UpdateCoursesRequest $request){

        $data = $request->validated() ;

        $courseDTO = CoursesDTO::fromRequest($data);

        $course = UpdateCoursesAction::execute($course, $courseDTO);

        return response()->json(success((new GetCoursesVM($course))->toArray()));
    }

    public function destroy(Course $course){

        return response()->json(success(DestroyCoursesAction::execute($course)));
    }

}
