<?php


namespace App\Domain\Materials\Courses\Courses\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CoursesDTO extends DataTransferObject
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
