<?php


namespace App\Domain\Pages\PageCategory\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class PageCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $category_id;
	/* @var integer|null */
	public $page_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,
			'page_id'				=> $request['page_id'] ?? null ,

        ]);
    }
}
