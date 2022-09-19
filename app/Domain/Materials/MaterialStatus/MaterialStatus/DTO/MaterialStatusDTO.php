<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatus\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialStatusDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,

        ]);
    }
}
