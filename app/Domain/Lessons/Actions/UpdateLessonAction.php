<?php

namespace App\Domain\Lessons\Actions;

use App\Domain\Lessons\DTO\LessonDTO;
use App\Domain\Lessons\Model\Lesson;

class UpdateLessonAction
{

    public static function execute(
        Lesson $lesson,LessonDTO $lessonDTO
    ){
        $lesson->update(array_null_filter($lessonDTO->toArray()));
        return $lesson;
    }
}
