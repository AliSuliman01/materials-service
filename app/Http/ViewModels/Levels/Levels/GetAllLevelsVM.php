<?php


namespace App\Http\ViewModels\Levels\Levels;

use App\Domain\Levels\Levels\Model\Level;
use Illuminate\Contracts\Support\Arrayable;

class GetAllLevelsVM implements Arrayable
{
    public function toArray()
    {
        return Level::with(['translation'])->get();
    }
}
