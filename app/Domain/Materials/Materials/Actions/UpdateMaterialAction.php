<?php

namespace App\Domain\Materials\Materials\Actions;

use App\Domain\Materials\Materials\DTO\MaterialDTO;
use App\Domain\Materials\Materials\Model\Material;

class UpdateMaterialAction
{

    public static function execute(
        Material $material,MaterialDTO $materialDTO
    ){
        $material->update(array_null_filter($materialDTO->toArray()));
        return $material;
    }
}
