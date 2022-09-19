<?php


namespace App\Http\ViewModels\Materials\UserMaterial;

use App\Domain\Materials\UserMaterial\Model\UserMaterial;
use Illuminate\Contracts\Support\Arrayable;


class GetUserMaterialVM implements Arrayable
{

    private $user_material;

    public function __construct($user_material)
    {
        $this->user_material = $user_material;
    }

    public function toArray()
    {
        return  $this->user_material;
    }
}
