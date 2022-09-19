<?php


namespace App\Domain\Tips\Tips\Actions;


use App\Domain\Tips\Tips\DTO\TipDTO;
use App\Domain\Tips\Tips\Model\Tip;

class StoreTipAction
{
    public static function execute(
    TipDTO $tipDTO
    ){

        return Tip::create(array_null_filter($tipDTO->toArray()));
    }
}
