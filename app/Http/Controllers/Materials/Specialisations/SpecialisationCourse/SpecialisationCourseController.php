<?php


namespace App\Http\Controllers\Materials\Specialisations\SpecialisationCourse;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Actions\StoreSpecialisationCourseAction;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Actions\DestroySpecialisationCourseAction;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Actions\UpdateSpecialisationCourseAction;
use App\Domain\Materials\Specialisations\SpecialisationCourse\DTO\SpecialisationCourseDTO;
use App\Http\Requests\Materials\Specialisations\SpecialisationCourse\StoreSpecialisationCourseRequest;
use App\Http\Requests\Materials\Specialisations\SpecialisationCourse\UpdateSpecialisationCourseRequest;
use App\Http\ViewModels\Materials\Specialisations\SpecialisationCourse\GetSpecialisationCourseVM;
use App\Http\ViewModels\Materials\Specialisations\SpecialisationCourse\GetAllSpecialisationCoursesVM;

class SpecialisationCourseController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllSpecialisationCoursesVM())->toArray()));
    }

    public function show(SpecialisationCourse $specialisationCourse){

        return response()->json(Response::success((new GetSpecialisationCourseVM($specialisationCourse))->toArray()));
    }

    public function store(StoreSpecialisationCourseRequest $request){

        $data = $request->validated() ;

        $specialisationCourseDTO = SpecialisationCourseDTO::fromRequest($data);

        $specialisationCourse = StoreSpecialisationCourseAction::execute($specialisationCourseDTO);

        return response()->json(Response::success((new GetSpecialisationCourseVM($specialisationCourse))->toArray()));
    }

    public function update(SpecialisationCourse $specialisationCourse, UpdateSpecialisationCourseRequest $request){

        $data = $request->validated() ;

        $specialisationCourseDTO = SpecialisationCourseDTO::fromRequest($data);

        $specialisationCourse = UpdateSpecialisationCourseAction::execute($specialisationCourse, $specialisationCourseDTO);

        return response()->json(Response::success((new GetSpecialisationCourseVM($specialisationCourse))->toArray()));
    }

    public function destroy(SpecialisationCourse $specialisationCourse){

        return response()->json(Response::success(DestroySpecialisationCourseAction::execute($specialisationCourse)));
    }

}
