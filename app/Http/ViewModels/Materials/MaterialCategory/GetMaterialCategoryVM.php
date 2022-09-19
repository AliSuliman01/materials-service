<?php


namespace App\Http\ViewModels\Materials\MaterialCategory;

use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialCategoryVM implements Arrayable
{

    private $material_category;

    public function __construct($material_category)
    {
        $this->material_category = $material_category;
    }

    public function toArray()
    {
        return  $this->material_category;
    }
}
