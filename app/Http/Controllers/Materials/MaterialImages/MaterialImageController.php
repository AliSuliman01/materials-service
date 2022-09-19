<?php


namespace App\Http\Controllers\Materials\MaterialImages;

use App\Http\Controllers\Controller;
use App\Domain\Materials\MaterialImages\Model\MaterialImage;
use App\Domain\Materials\MaterialImages\Actions\StoreMaterialImageAction;
use App\Domain\Materials\MaterialImages\Actions\DestroyMaterialImageAction;
use App\Domain\Materials\MaterialImages\Actions\UpdateMaterialImageAction;
use App\Domain\Materials\MaterialImages\DTO\MaterialImageDTO;
use App\Http\Requests\Materials\MaterialImages\StoreMaterialImageRequest;
use App\Http\Requests\Materials\MaterialImages\UpdateMaterialImageRequest;
use App\Http\ViewModels\Materials\MaterialImages\GetMaterialImageVM;
use App\Http\ViewModels\Materials\MaterialImages\GetAllMaterialImagesVM;

class MaterialImageController extends Controller
{
    public function index(){

        return response()->json(success((new GetAllMaterialImagesVM())->toArray()));
    }

    public function show(MaterialImage $materialImage){

        return response()->json(success((new GetMaterialImageVM($materialImage))->toArray()));
    }

    public function store(StoreMaterialImageRequest $request){

        $data = $request->validated() ;

        $materialImageDTO = MaterialImageDTO::fromRequest($data);

        $materialImage = StoreMaterialImageAction::execute($materialImageDTO);

        return response()->json(success((new GetMaterialImageVM($materialImage))->toArray()));
    }

    public function update(MaterialImage $materialImage, UpdateMaterialImageRequest $request){

        $data = $request->validated() ;

        $materialImageDTO = MaterialImageDTO::fromRequest($data);

        $materialImage = UpdateMaterialImageAction::execute($materialImage, $materialImageDTO);

        return response()->json(success((new GetMaterialImageVM($materialImage))->toArray()));
    }

    public function destroy(MaterialImage $materialImage){

        return response()->json(success(DestroyMaterialImageAction::execute($materialImage)));
    }

}
