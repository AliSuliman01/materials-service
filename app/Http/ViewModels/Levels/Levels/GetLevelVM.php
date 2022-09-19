<?php


namespace App\Http\ViewModels\Levels\Levels;

use App\Domain\Levels\Levels\Model\Level;
use Illuminate\Contracts\Support\Arrayable;


class GetLevelVM implements Arrayable
{

    private $level;

    public function __construct(Level $level)
    {
        $this->level = $level->load(['translation']);
    }

    public function toArray()
    {
        return  $this->level;
    }
}
