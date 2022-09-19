<?php


namespace App\Http\ViewModels\Pages\PageCategory;

use App\Domain\Pages\PageCategory\Model\PageCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetPageCategoryVM implements Arrayable
{

    private $page_category;

    public function __construct($page_category)
    {
        $this->page_category = $page_category;
    }

    public function toArray()
    {
        return  $this->page_category;
    }
}
