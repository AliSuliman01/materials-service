<?php


namespace App\Http\ViewModels\Categories\Categories;

use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Contracts\Support\Arrayable;


class CategoryShowVM implements Arrayable
{

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category->load(['translations','images']) ;
    }

    public function toArray()
    {
        return  $this->category;
    }
}
