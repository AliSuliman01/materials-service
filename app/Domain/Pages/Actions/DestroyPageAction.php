<?php


namespace App\Domain\Pages\Actions;


use App\Domain\Pages\Model\Page;

class DestroyPageAction
{
    public static function execute(
        Page $page
    ){
        $page->delete();
        return $page;
    }
}
