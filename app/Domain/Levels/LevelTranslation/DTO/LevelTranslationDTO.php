<?php


namespace App\Domain\Levels\LevelTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class LevelTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $name;
	/* @var integer|null */
	public $level_id;
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
			'level_id'				=> $request['level_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
