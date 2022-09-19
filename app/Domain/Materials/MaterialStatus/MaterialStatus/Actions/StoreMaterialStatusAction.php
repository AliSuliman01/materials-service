<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatus\Actions;


use App\Domain\Materials\MaterialStatus\MaterialStatus\DTO\MaterialStatusDTO;
use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;

class StoreMaterialStatusAction
{
    public static function execute(
    MaterialStatusDTO $material_statusDTO
    ){

        return MaterialStatus::create(array_null_filter($material_statusDTO->toArray()));
    }
}
