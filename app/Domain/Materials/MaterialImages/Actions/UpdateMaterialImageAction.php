<?php

namespace App\Domain\Materials\MaterialImages\Actions;

use App\Domain\Materials\MaterialImages\DTO\MaterialImageDTO;
use App\Domain\Materials\MaterialImages\Model\MaterialImage;

class UpdateMaterialImageAction
{

    public static function execute(
        MaterialImage $material_image,MaterialImageDTO $material_imageDTO
    ){
        $material_image->update(array_null_filter($material_imageDTO->toArray()));
        return $material_image;
    }
}
