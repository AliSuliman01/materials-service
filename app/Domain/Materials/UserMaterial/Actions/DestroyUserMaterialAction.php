<?php


namespace App\Domain\Materials\UserMaterial\Actions;


use App\Domain\Materials\UserMaterial\Model\UserMaterial;

class DestroyUserMaterialAction
{
    public static function execute(
        UserMaterial $user_material
    ){
        $user_material->delete();
        return $user_material;
    }
}
