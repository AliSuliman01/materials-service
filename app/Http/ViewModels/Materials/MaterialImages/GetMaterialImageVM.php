<?php


namespace App\Http\ViewModels\Materials\MaterialImages;

use App\Domain\Materials\MaterialImages\Model\MaterialImage;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialImageVM implements Arrayable
{

    private $material_image;

    public function __construct($material_image)
    {
        $this->material_image = $material_image;
    }

    public function toArray()
    {
        return  $this->material_image;
    }
}
