<?php


namespace App\Http\ViewModels\Pages;

use App\Domain\Pages\Model\Page;
use Illuminate\Contracts\Support\Arrayable;


class GetPageVM implements Arrayable
{

    private $page;

    public function __construct(Page $page)
    {
        $this->page = $page->load('categories.categories.materials');
    }

    public function toArray()
    {
        return  $this->page;
    }
}
