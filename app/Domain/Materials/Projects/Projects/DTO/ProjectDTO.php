<?php


namespace App\Domain\Materials\Projects\Projects\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ProjectDTO extends DataTransferObject
{

	/* @var integer|null */
	public $material_id;


    public static function fromRequest($request)
    {
        return new self([
			'material_id'				=> $request['material_id'] ?? null ,

        ]);
    }
}
