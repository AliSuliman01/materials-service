<?php

namespace App\Domain\Pages\Actions;

use App\Domain\Pages\DTO\PageDTO;
use App\Domain\Pages\Model\Page;

class UpdatePageAction
{

    public static function execute(
        Page $page,PageDTO $pageDTO
    ){
        $page->update(array_null_filter($pageDTO->toArray()));
        return $page;
    }
}
