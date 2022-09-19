<?php

namespace App\Domain\Tips\Tips\Actions;

use App\Domain\Tips\Tips\DTO\TipDTO;
use App\Domain\Tips\Tips\Model\Tip;

class UpdateTipAction
{

    public static function execute(
        Tip $tip,TipDTO $tipDTO
    ){
        $tip->update(array_null_filter($tipDTO->toArray()));
        return $tip;
    }
}
