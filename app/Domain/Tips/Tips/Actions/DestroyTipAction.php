<?php


namespace App\Domain\Tips\Tips\Actions;


use App\Domain\Tips\Tips\Model\Tip;

class DestroyTipAction
{
    public static function execute(
        Tip $tip
    ){
        $tip->delete();
        return $tip;
    }
}
