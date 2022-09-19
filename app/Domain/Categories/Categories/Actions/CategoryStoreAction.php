<?php


namespace App\Domain\Categories\Categories\Actions;


use App\Domain\Categories\Categories\DTO\CategoryDTO;
use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Support\Facades\Auth;

class CategoryStoreAction
{
    public static function execute(
        CategoryDTO $categoryDTO
    ):Category{

        $category = new Category(array_null_filter($categoryDTO->toArray()));
        $category->save();
        return $category;
    }
}
