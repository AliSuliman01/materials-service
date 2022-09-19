<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatus\Actions;


use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;

class DestroyMaterialStatusAction
{
    public static function execute(
        MaterialStatus $material_status
    ){
        $material_status->delete();
        return $material_status;
    }
}
