<?php


namespace App\Http\ViewModels\Materials\MaterialTranslation;

use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return MaterialTranslation::query()->get();
    }
}
