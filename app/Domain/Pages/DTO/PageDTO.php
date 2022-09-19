<?php


namespace App\Domain\Pages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class PageDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $name;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'name'				=> $request['name'] ?? null ,

        ]);
    }
}
