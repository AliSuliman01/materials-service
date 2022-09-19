<?php


namespace App\Domain\Materials\MaterialStatus\MaterialStatusTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class MaterialStatusTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $material_status_id;
	/* @var string|null */
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
			'id'				=> $request['id'] ?? null ,
			'material_status_id'				=> $request['material_status_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
