<?php


namespace App\Http\ViewModels\Materials\MaterialStatus\MaterialStatusTranslation;

use App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\Model\MaterialStatusTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialStatusTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return MaterialStatusTranslation::query()->get();
    }
}
