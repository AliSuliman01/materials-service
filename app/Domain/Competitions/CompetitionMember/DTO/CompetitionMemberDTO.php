<?php


namespace App\Domain\Competitions\CompetitionMember\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CompetitionMemberDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $user_id;
	/* @var integer|null */
	public $competition_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'user_id'				=> $request['user_id'] ?? null ,
			'competition_id'				=> $request['competition_id'] ?? null ,

        ]);
    }
}
