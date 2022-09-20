<?php

namespace App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model;

use App\Domain\Competitions\CompetitionTypes\CompetitionTypeTranslation\Model\CompetitionTypeTranslation;
use App\Http\Traits\Features\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompetitionType extends Model
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
        return CompetitionTypeTranslation::class;
    }
}
