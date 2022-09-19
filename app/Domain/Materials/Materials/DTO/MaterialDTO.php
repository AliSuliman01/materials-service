<?php


namespace App\Domain\Materials\Materials\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $duration;
	/* @var integer|null */
	public $level_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'duration'				=> $request['duration'] ?? null ,
			'level_id'				=> $request['level_id'] ?? null ,

        ]);
    }
}
