<?php


namespace App\Domain\Levels\Levels\Actions;


use App\Domain\Levels\Levels\Model\Level;

class DestroyLevelAction
{
    public static function execute(
        Level $level
    ){
        $level->delete();
        return $level;
    }
}
