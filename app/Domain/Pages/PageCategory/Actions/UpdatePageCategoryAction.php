<?php

namespace App\Domain\Pages\PageCategory\Actions;

use App\Domain\Pages\PageCategory\DTO\PageCategoryDTO;
use App\Domain\Pages\PageCategory\Model\PageCategory;

class UpdatePageCategoryAction
{

    public static function execute(
        PageCategory $page_category,PageCategoryDTO $page_categoryDTO
    ){
        $page_category->update(array_null_filter($page_categoryDTO->toArray()));
        return $page_category;
    }
}
