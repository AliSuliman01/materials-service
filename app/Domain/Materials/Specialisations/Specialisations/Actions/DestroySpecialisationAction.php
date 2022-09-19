<?php


namespace App\Domain\Materials\Specialisations\Specialisations\Actions;


use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;

class DestroySpecialisationAction
{
    public static function execute(
        Specialisation $specialisation
    ){
        $specialisation->delete();
        return $specialisation;
    }
}
