<?php


namespace App\Domain\Levels\Levels\Actions;


use App\Domain\Levels\Levels\DTO\LevelDTO;
use App\Domain\Levels\Levels\Model\Level;

class StoreLevelAction
{
    public static function execute(
    LevelDTO $levelDTO
    ){

        return Level::create(array_null_filter($levelDTO->toArray()));
    }
}
