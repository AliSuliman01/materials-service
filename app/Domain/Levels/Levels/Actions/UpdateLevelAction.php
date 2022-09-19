<?php

namespace App\Domain\Levels\Levels\Actions;

use App\Domain\Levels\Levels\DTO\LevelDTO;
use App\Domain\Levels\Levels\Model\Level;

class UpdateLevelAction
{

    public static function execute(
        Level $level,LevelDTO $levelDTO
    ){
        $level->update(array_null_filter($levelDTO->toArray()));
        return $level;
    }
}
