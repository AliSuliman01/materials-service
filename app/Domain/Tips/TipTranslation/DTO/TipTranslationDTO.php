<?php


namespace App\Domain\Tips\TipTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class TipTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $name;
	/* @var integer|null */
	public $tip_id;
	/* @var integer|null */
	public $language_code;
	/* @var string|null */
	public $description;
	/* @var string|null */
	public $notes;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'tip_id'				=> $request['tip_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
