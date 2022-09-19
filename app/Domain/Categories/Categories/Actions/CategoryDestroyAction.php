<?php


namespace App\Domain\Categories\Categories\Actions;


use App\Domain\Categories\Categories\DTO\CategoryDTO;
use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Support\Facades\Auth;

class CategoryDestroyAction
{
    public static function execute(
        Category $category
    ){
        $category->delete();
        return $category;
    }
}
