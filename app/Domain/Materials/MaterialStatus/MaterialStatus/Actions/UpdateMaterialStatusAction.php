<?php

namespace App\Domain\Materials\MaterialStatus\MaterialStatus\Actions;

use App\Domain\Materials\MaterialStatus\MaterialStatus\DTO\MaterialStatusDTO;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;

class UpdateMaterialStatusAction
{

    public static function execute(
        MaterialStatus $material_status,MaterialStatusDTO $material_statusDTO
    ){
        $material_status->update(array_null_filter($material_statusDTO->toArray()));
        return $material_status;
    }
}
