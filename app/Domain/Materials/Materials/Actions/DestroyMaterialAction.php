<?php


namespace App\Domain\Materials\Materials\Actions;


use App\Domain\Materials\Materials\Model\Material;

class DestroyMaterialAction
{
    public static function execute(
        Material $material
    ){
        $material->delete();
        return $material;
    }
}
