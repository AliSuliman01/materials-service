<?php


namespace App\Domain\Materials\Courses\Courses\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CoursesDTO extends DataTransferObject
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
        $this->material_id = $id;
        return $this;
    }
}
