<?php


namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypes\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CompetitionTypeDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,

        ]);
    }
}
