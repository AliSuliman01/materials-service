<?php

namespace App\Domain\Materials\Courses\Courses\Model;

use App\Domain\Lessons\Model\Lesson;
use App\Domain\Materials\Materials\Model\Material;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends SmartModel
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'material_id';

    protected $guarded = [
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


    protected $with = [
        'material','lessons'
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class,'course_id');
    }

}
