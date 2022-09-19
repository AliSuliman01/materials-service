<?php


namespace App\Http\ViewModels\Pages\PageCategory;

use App\Domain\Pages\PageCategory\Model\PageCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllPageCategorysVM implements Arrayable
{
    public function toArray()
    {
        return PageCategory::query()->get();
    }
}
