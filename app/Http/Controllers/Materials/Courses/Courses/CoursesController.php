<?php


namespace App\Http\Controllers\Materials\Courses\Courses;

use App\Domain\Categories\Categories\Model\Category;
use App\Domain\Levels\Levels\Model\Level;
use App\Domain\Materials\Materials\Actions\StoreMaterialAction;
use App\Domain\Materials\Materials\Actions\UpdateMaterialAction;
use App\Domain\Materials\Materials\DTO\MaterialDTO;
use App\Domain\Materials\Materials\Model\Material;
use App\Http\Controllers\Controller;
use App\Domain\Materials\Courses\Courses\Model\Course;
use App\Domain\Materials\Courses\Courses\Actions\StoreCoursesAction;
use App\Domain\Materials\Courses\Courses\Actions\DestroyCoursesAction;
use App\Domain\Materials\Courses\Courses\Actions\UpdateCoursesAction;
use App\Domain\Materials\Courses\Courses\DTO\CoursesDTO;
use App\Http\Requests\Materials\Courses\Courses\CourseSearchRequest;
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

    public function dataForSearch()
    {
        return response()->json(
            [
                'levels' => Level::with('translation')->get(),
                'categories' => Category::query()->whereRelation('parent','id','=',10)->get()
            ]
        );
    }
    public function search(CourseSearchRequest $request)
    {
        $data = $request->validated();

        $courses = Material::with(['course']);

        if (isset($data['level_id']))
            $courses->where('level_id','=',$data['level_id']);

        if (isset($data['name']))
            $courses->whereRelation('translations','name','like',"%{$data['name']}%");

        if (isset($data['categories']))
            $courses->whereHas('categories',function($categoryQuery) use($data) {
                    $categoryQuery->whereIn('categories.id',$data['categories']);
                });

        return response()->json(success($courses->get()));
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
