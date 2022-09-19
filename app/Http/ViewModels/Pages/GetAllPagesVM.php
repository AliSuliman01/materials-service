<?php


namespace App\Http\ViewModels\Pages;

use App\Domain\Pages\Model\Page;
use Illuminate\Contracts\Support\Arrayable;

class GetAllPagesVM implements Arrayable
{
    public function toArray()
    {
        return Page::query()->get();
    }
}
