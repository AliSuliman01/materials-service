<?php


namespace App\Domain\Materials\UserMaterial\Actions;


use App\Domain\Materials\UserMaterial\DTO\UserMaterialDTO;
use App\Domain\Materials\UserMaterial\Model\UserMaterial;

class StoreUserMaterialAction
{
    public static function execute(
    UserMaterialDTO $user_materialDTO
    ){

        return UserMaterial::create(array_null_filter($user_materialDTO->toArray()));
    }
}
