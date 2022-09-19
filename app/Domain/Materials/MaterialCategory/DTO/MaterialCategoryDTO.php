<?php


namespace App\Domain\Materials\MaterialCategory\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $material_id;
	/* @var integer|null */
	public $category_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'material_id'				=> $request['material_id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,

        ]);
    }
}
