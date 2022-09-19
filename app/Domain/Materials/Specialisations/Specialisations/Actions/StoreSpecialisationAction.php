<?php


namespace App\Domain\Materials\Specialisations\Specialisations\Actions;


use App\Domain\Materials\Specialisations\Specialisations\DTO\SpecialisationDTO;
use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;

class StoreSpecialisationAction
{
    public static function execute(
    SpecialisationDTO $specialisationDTO
    ){

        return Specialisation::create(array_null_filter($specialisationDTO->toArray()));
    }
}
