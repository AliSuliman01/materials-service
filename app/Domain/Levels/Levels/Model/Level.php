<?php

namespace App\Domain\Levels\Levels\Model;

use App\Domain\Levels\LevelTranslation\Model\LevelTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Level extends SmartModel
{
    use HasFactory, SoftDeletes;

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

    public function translations()
    {
        return $this->hasMany(LevelTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(LevelTranslation::class)
            ->where('language_code',App::getLocale());
    }
}
