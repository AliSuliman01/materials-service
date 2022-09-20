<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptionTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionOptionTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $question_option_id;
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
			'question_option_id'				=> $request['question_option_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
