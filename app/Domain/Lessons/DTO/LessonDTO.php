<?php


namespace App\Domain\Lessons\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class LessonDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $video_path;
	/* @var integer|null */
	public $course_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'video_path'				=> $request['video_path'] ?? null ,
			'course_id'				=> $request['course_id'] ?? null ,

        ]);
    }
}
