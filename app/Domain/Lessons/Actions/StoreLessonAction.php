<?php


namespace App\Domain\Lessons\Actions;


use App\Domain\Lessons\DTO\LessonDTO;
use App\Domain\Lessons\Model\Lesson;

class StoreLessonAction
{
    public static function execute(
    LessonDTO $lessonDTO
    ){

        return Lesson::create(array_null_filter($lessonDTO->toArray()));
    }
}
