<?php


namespace App\Domain\Materials\MaterialImages\Actions;


use App\Domain\Materials\MaterialImages\Model\MaterialImage;

class DestroyMaterialImageAction
{
    public static function execute(
        MaterialImage $material_image
    ){
        $material_image->delete();
        return $material_image;
    }
}
