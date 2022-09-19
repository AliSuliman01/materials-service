<?php


namespace App\Domain\Materials\Projects\Projects\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ProjectDTO extends DataTransferObject
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
