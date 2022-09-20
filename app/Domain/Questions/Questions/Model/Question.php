<?php

namespace App\Domain\Questions\Questions\Model;

use App\Domain\Questions\QuestionCategory\Model\QuestionCategory;
use App\Domain\Questions\QuestionOptions\QuestionOptions\Model\QuestionOption;
use App\Domain\Questions\QuestionTranslation\Model\QuestionTranslation;
use App\Http\Traits\Features\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_user_id',
        'updated_by_user_id',
        'deleted_by_user_id',
    ];
    protected function translationsModel()
    {
        return QuestionTranslation::class;
    }

    public function prev_questions()
    {
        return $this->belongsToMany(Question::class,'question_to_question','next_question_id','prev_question_id');
    }
    public function next_questions()
    {
        return $this->belongsToMany(Question::class,'question_to_question','prev_question_id','next_question_id');
    }
    public function categories()
    {
        return $this->hasMany(QuestionCategory::class);
    }
    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }
}
