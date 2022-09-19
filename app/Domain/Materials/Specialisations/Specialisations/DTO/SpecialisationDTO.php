<?php


namespace App\Domain\Materials\Specialisations\Specialisations\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class SpecialisationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,

        ]);
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
