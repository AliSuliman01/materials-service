<?php


namespace App\Domain\Materials\MaterialImages\MaterialImageCategory\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialImageCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $material_image_id;
	/* @var integer|null */
	public $category_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'material_image_id'				=> $request['material_image_id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,

        ]);
    }
}
