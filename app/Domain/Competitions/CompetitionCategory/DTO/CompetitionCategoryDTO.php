<?php


namespace App\Domain\Competitions\CompetitionCategory\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CompetitionCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $category_id;
	/* @var integer|null */
	public $competition_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,
			'competition_id'				=> $request['competition_id'] ?? null ,

        ]);
    }
}
