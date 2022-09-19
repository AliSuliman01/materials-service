<?php


namespace App\Domain\Levels\Levels\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class LevelDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $sequence;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'sequence'				=> $request['sequence'] ?? null ,

        ]);
    }
}
