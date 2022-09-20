<?php


namespace App\Domain\Competitions\Competitions\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CompetitionDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $created_by_user_id;
	/* @var string|null */
	public $title;
	/* @var string|null */
	public $body;
	/* @var integer|null */
	public $competition_type_id;
	/* @var integer|null */
	public $first_question_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'created_by_user_id'				=> $request['created_by_user_id'] ?? null ,
			'title'				=> $request['title'] ?? null ,
			'body'				=> $request['body'] ?? null ,
			'competition_type_id'				=> $request['competition_type_id'] ?? null ,
			'first_question_id'				=> $request['first_question_id'] ?? null ,

        ]);
    }
}
