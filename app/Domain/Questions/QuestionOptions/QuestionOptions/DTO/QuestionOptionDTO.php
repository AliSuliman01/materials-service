<?php


namespace App\Domain\Questions\QuestionOptions\QuestionOptions\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionOptionDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $question_id;
	/* @var integer|null */
	public $is_correct;
	/* @var integer|null */
	public $accuracy_percent;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'question_id'				=> $request['question_id'] ?? null ,
			'is_correct'				=> $request['is_correct'] ?? null ,
			'accuracy_percent'				=> $request['accuracy_percent'] ?? null ,

        ]);
    }
}
