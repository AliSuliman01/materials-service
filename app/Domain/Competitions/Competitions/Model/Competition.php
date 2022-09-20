<?php

namespace App\Domain\Competitions\Competitions\Model;

use App\Domain\Competitions\CompetitionCategory\Model\CompetitionCategory;
use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;
use App\Domain\Competitions\CompetitionTypes\CompetitionTypes\Model\CompetitionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competition extends Model
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

    public function type()
    {
        return $this->belongsTo(CompetitionType::class);
    }
    public function members()
    {
        return $this->hasMany(CompetitionMember::class);
    }
    public function categories()
    {
        return $this->hasMany(CompetitionCategory::class);
    }
}
