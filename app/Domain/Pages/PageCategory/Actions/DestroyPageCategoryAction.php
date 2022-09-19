<?php


namespace App\Domain\Pages\PageCategory\Actions;


use App\Domain\Pages\PageCategory\Model\PageCategory;

class DestroyPageCategoryAction
{
    public static function execute(
        PageCategory $page_category
    ){
        $page_category->delete();
        return $page_category;
    }
}
