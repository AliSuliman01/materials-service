<?php


namespace App\Domain\Categories\CategoryTranslation\Actions;


use App\Domain\Categories\CategoryTranslation\DTO\CategoryTranslationDTO;
use App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation;
use Illuminate\Support\Facades\Auth;

class CategoryTranslationStoreAction
{
    public static function execute(
        CategoryTranslationDTO $categoryTranslationDTO
    ){

        $categoryTranslation = new CategoryTranslation($categoryTranslationDTO->toArray());
        $categoryTranslation->save();
        return $categoryTranslation;
    }
}
