<?php


namespace App\Domain\Materials\UserMaterial\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class UserMaterialDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $user_id;
	/* @var integer|null */
	public $material_id;
	/* @var integer|null */
	public $material_status_id;
	/* @var integer|null */
	public $progress_percent;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'user_id'				=> $request['user_id'] ?? null ,
			'material_id'				=> $request['material_id'] ?? null ,
			'material_status_id'				=> $request['material_status_id'] ?? null ,
			'progress_percent'				=> $request['progress_percent'] ?? null ,

        ]);
    }
}
