<?php


namespace App\Http\ViewModels\Materials\Specialisations\Specialisations;

use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;
use Illuminate\Contracts\Support\Arrayable;


class GetSpecialisationVM implements Arrayable
{

    private $specialisation;

    public function __construct(Specialisation $specialisation)
    {
        $this->specialisation = $specialisation->load(['courses']);
    }

    public function toArray()
    {
        return  $this->specialisation;
    }
}
