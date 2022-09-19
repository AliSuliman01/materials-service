<?php


namespace App\Domain\Pages\Actions;


use App\Domain\Pages\DTO\PageDTO;
use App\Domain\Pages\Model\Page;

class StorePageAction
{
    public static function execute(
    PageDTO $pageDTO
    ){

        return Page::create(array_null_filter($pageDTO->toArray()));
    }
}
