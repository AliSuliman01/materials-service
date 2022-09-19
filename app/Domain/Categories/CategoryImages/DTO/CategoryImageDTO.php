<?php


namespace App\Domain\Categories\CategoryImages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CategoryImageDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var integer|null */
public $category_id;
	/* @var string|null */
public $img_src;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'category_id' 					=> $request['category_id'] ?? null ,
			'img_src' 					=> $request['img_src'] ?? null ,

        ]);
    }
}
