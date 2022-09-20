<?php


namespace App\Domain\Questions\Questions\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $category_id;
	/* @var integer|null */
	public $material_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,
			'material_id'				=> $request['material_id'] ?? null ,

        ]);
    }
}
