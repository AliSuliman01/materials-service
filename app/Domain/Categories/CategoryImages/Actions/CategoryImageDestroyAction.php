<?php


namespace App\Domain\Categories\CategoryImages\Actions;


use App\Domain\Categories\CategoryImages\DTO\CategoryImageDTO;
use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use Illuminate\Support\Facades\Auth;

class CategoryImageDestroyAction
{
    public static function execute(
        CategoryImage $categoryImage
    ){

        $categoryImage->delete();
        return $categoryImage;
    }
}
