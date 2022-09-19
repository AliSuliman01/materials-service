<?php


namespace App\Http\ViewModels\Materials\MaterialTranslation;

use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialTranslationVM implements Arrayable
{

    private $material_translation;

    public function __construct($material_translation)
    {
        $this->material_translation = $material_translation;
    }

    public function toArray()
    {
        return  $this->material_translation;
    }
}
