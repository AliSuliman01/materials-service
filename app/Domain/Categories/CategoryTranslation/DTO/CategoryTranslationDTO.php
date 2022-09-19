<?php


namespace App\Domain\Categories\CategoryTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CategoryTranslationDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var integer|null */
public $category_id;
	/* @var integer|null */
public $language_code;
	/* @var string|null */
public $name;
	/* @var string|null */
public $description;
	/* @var string|null */
public $notes;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'category_id' 					=> $request['category_id'] ?? null ,
			'language_code' 					=> $request['language_code'] ?? null ,
			'name' 					=> $request['name'] ?? null ,
			'description' 					=> $request['description'] ?? null ,
			'notes' 					=> $request['notes'] ?? null ,

        ]);
    }
}
