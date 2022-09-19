<?php


namespace App\Http\ViewModels\Materials\MaterialStatus\MaterialStatusTranslation;

use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialStatusTranslationVM implements Arrayable
{

    private $material_status_translation;

    public function __construct($material_status_translation)
    {
        $this->material_status_translation = $material_status_translation;
    }

    public function toArray()
    {
        return  $this->material_status_translation;
    }
}
