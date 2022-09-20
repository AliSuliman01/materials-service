<?php


namespace App\Domain\Questions\QuestionToQuestion\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionToQuestionDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $prev_question_id;
	/* @var integer|null */
	public $next_question_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'prev_question_id'				=> $request['prev_question_id'] ?? null ,
			'next_question_id'				=> $request['next_question_id'] ?? null ,

        ]);
    }
}
