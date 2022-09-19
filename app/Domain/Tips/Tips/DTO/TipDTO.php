<?php


namespace App\Domain\Tips\Tips\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class TipDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $material_id;
	/* @var string|null */
	public $icon;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'material_id'				=> $request['material_id'] ?? null ,
			'icon'				=> $request['icon'] ?? null ,

        ]);
    }
}
