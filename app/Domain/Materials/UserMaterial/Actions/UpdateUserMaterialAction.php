<?php

namespace App\Domain\Materials\UserMaterial\Actions;

use App\Domain\Materials\UserMaterial\DTO\UserMaterialDTO;
use App\Domain\Materials\UserMaterial\Model\UserMaterial;

class UpdateUserMaterialAction
{

    public static function execute(
        UserMaterial $user_material,UserMaterialDTO $user_materialDTO
    ){
        $user_material->update(array_null_filter($user_materialDTO->toArray()));
        return $user_material;
    }
}
