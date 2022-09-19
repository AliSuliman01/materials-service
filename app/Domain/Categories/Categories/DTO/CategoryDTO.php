<?php


namespace App\Domain\Categories\Categories\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CategoryDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
	/* @var integer|null */
    public $parent_category_id;
	/* @var integer|null */
    public $sequence;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'parent_category_id'        =>  $request['parent_category_id'] ?? null,
            'sequence'        =>  $request['sequence'] ?? null,
        ]);
    }
}
