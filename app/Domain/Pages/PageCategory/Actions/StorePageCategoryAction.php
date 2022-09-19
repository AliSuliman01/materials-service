<?php


namespace App\Domain\Pages\PageCategory\Actions;


use App\Domain\Pages\PageCategory\DTO\PageCategoryDTO;
use App\Domain\Pages\PageCategory\Model\PageCategory;

class StorePageCategoryAction
{
    public static function execute(
    PageCategoryDTO $page_categoryDTO
    ){

        return PageCategory::create(array_null_filter($page_categoryDTO->toArray()));
    }
}
