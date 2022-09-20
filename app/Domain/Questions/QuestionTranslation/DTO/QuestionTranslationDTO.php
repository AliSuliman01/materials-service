<?php


namespace App\Domain\Questions\QuestionTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $question_id;
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
			'question_id'				=> $request['question_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
