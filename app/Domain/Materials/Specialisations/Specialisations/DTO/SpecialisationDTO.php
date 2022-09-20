<?php


namespace App\Domain\Materials\Specialisations\Specialisations\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class SpecialisationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $material_id;


    public static function fromRequest($request)
    {
        return new self([
			'material_id'				=> $request['material_id'] ?? null ,

        ]);
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
