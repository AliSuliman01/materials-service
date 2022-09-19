<?php


namespace App\Http\ViewModels\Materials\Specialisations\Specialisations;

use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllSpecialisationsVM implements Arrayable
{
    public function toArray()
    {
        return Specialisation::with(['courses'])->get();
    }
}
