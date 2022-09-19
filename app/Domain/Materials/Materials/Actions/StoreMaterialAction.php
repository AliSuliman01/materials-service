<?php


namespace App\Domain\Materials\Materials\Actions;


use App\Domain\Materials\Materials\DTO\MaterialDTO;
use App\Domain\Materials\Materials\Model\Material;

class StoreMaterialAction
{
    public static function execute(
    MaterialDTO $materialDTO
    ){

        return Material::create(array_null_filter($materialDTO->toArray()));
    }
}
