<?php

namespace App\Domain\Materials\Specialisations\Specialisations\Actions;

use App\Domain\Materials\Specialisations\Specialisations\DTO\SpecialisationDTO;
use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;

class UpdateSpecialisationAction
{

    public static function execute(
        Specialisation $specialisation,SpecialisationDTO $specialisationDTO
    ){
        $specialisation->update(array_null_filter($specialisationDTO->toArray()));
        return $specialisation;
    }
}
