<?php


namespace App\Domain\Lessons\Actions;


use App\Domain\Lessons\Model\Lesson;

class DestroyLessonAction
{
    public static function execute(
        Lesson $lesson
    ){
        $lesson->delete();
        return $lesson;
    }
}
