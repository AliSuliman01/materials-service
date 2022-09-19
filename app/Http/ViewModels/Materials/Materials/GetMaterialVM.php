<?php


namespace App\Http\ViewModels\Materials\Materials;

use App\Domain\Materials\Materials\Model\Material;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialVM implements Arrayable
{

    private $material;

    public function __construct($material)
    {
        $this->material = $material;
    }

    public function toArray()
    {
        return  $this->material;
    }
}
