<?php


namespace App\Http\ViewModels\Tips\Tips;

use App\Domain\Tips\Tips\Model\Tip;
use Illuminate\Contracts\Support\Arrayable;

class GetAllTipsVM implements Arrayable
{
    public function toArray()
    {
        return Tip::query()->get();
    }
}
