<?php


namespace App\Domain\Categories\Categories\Actions;


use App\Domain\Categories\Categories\DTO\CategoryDTO;
use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryUpdateAction
{

    public static function execute(
        Category $category,
        CategoryDTO $categoryDTO
    ){

        $category->update(array_null_filter($categoryDTO->toArray()));
        $category->save();
        return $category;
    }
}
