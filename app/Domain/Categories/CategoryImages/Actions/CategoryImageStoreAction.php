<?php


namespace App\Domain\Categories\CategoryImages\Actions;


use App\Domain\Categories\CategoryImages\DTO\CategoryImageDTO;
use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use Illuminate\Support\Facades\Auth;

class CategoryImageStoreAction
{
    public static function execute(
        CategoryImageDTO $categoryImageDTO
    ){

        $categoryImage = new CategoryImage($categoryImageDTO->toArray());
        $categoryImage->save();
        return $categoryImage;
    }
}
