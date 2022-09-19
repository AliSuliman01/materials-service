<?php


namespace App\Domain\Categories\CategoryTranslation\Actions;


use App\Domain\Categories\CategoryTranslation\DTO\CategoryTranslationDTO;
use App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation;
use Illuminate\Support\Facades\Auth;

class CategoryTranslationDestroyAction
{
    public static function execute(
        CategoryTranslationDTO   $categoryTranslationDTO
    ){

        $categoryTranslation = CategoryTranslation::find($categoryTranslationDTO->id);
        $categoryTranslation->delete();
        return $categoryTranslation;
    }
}
