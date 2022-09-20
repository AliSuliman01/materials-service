<?php


namespace App\Domain\Questions\QuestionCategory\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class QuestionCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $question_id;
	/* @var integer|null */
	public $category_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'question_id'				=> $request['question_id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,

        ]);
    }
}
