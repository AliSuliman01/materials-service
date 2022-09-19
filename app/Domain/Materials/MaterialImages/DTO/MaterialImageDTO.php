<?php


namespace App\Domain\Materials\MaterialImages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialImageDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $material_id;
	/* @var string|null */
	public $img_src;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'material_id'				=> $request['material_id'] ?? null ,
			'img_src'				=> $request['img_src'] ?? null ,

        ]);
    }
}
