<?php


namespace App\Domain\Materials\MaterialImages\Actions;


use App\Domain\Materials\MaterialImages\DTO\MaterialImageDTO;
use App\Domain\Materials\MaterialImages\Model\MaterialImage;

class StoreMaterialImageAction
{
    public static function execute(
    MaterialImageDTO $material_imageDTO
    ){

        return MaterialImage::create(array_null_filter($material_imageDTO->toArray()));
    }
}
