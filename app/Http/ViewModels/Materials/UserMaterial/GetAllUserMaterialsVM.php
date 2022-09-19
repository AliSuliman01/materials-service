<?php


namespace App\Http\ViewModels\Materials\UserMaterial;

use App\Domain\Materials\UserMaterial\Model\UserMaterial;
use Illuminate\Contracts\Support\Arrayable;

class GetAllUserMaterialsVM implements Arrayable
{
    public function toArray()
    {
        return UserMaterial::query()->get();
    }
}
