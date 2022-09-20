<?php


namespace App\Http\Controllers\Materials\Courses\Courses;

use App\Domain\Materials\Materials\Actions\StoreMaterialAction;
use App\Domain\Materials\Materials\Actions\UpdateMaterialAction;
use App\Domain\Materials\Materials\DTO\MaterialDTO;
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
use Illuminate\Support\Facades\DB;

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

        $course = DB::transaction(function () use ($data) {

            $material = StoreMaterialAction::execute(MaterialDTO::fromRequest($data));
            $material->updateRelation('translations', $data['translations'] ?? []);
            $material->updateRelation('images', $data['images'] ?? []);
            $material->categories()->sync($data['categories'] ?? []);

            $course = StoreCoursesAction::execute(CoursesDTO::fromRequest($data)->setId($material->id));
            return $course;
        });

        return response()->json(success((new GetCoursesVM($course))->toArray()));
    }

    public function update(Course $course, UpdateCoursesRequest $request){

        $data = $request->validated() ;
        $course = DB::transaction(function () use ($course, $data) {

            $material = UpdateMaterialAction::execute($course->material, MaterialDTO::fromRequest($data));
            $material->updateRelation('translations', $data['translations'] ?? []);
            $material->updateRelation('images', $data['images'] ?? []);
            $material->categories()->sync($data['categories'] ?? []);

            $course = UpdateCoursesAction::execute($course, CoursesDTO::fromRequest($data)->setId($material->id));
            return $course;
        });

        return response()->json(success((new GetCoursesVM($course))->toArray()));
    }

    public function destroy(Course $course){

        return response()->json(success(DestroyCoursesAction::execute($course)));
    }

}
