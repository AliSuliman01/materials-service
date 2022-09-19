<?php

namespace App\Domain\Levels\LevelTranslation\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelTranslation extends SmartModel
{
    use HasFactory, SoftDeletes, AsPivot;

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
}
