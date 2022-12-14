<?php

namespace App\Domain\Materials\Specialisations\Specialisations\Model;

use App\Domain\Materials\Courses\Courses\Model\Course;
use App\Domain\Materials\Materials\Model\Material;
use App\Domain\Materials\Specialisations\SpecialisationCourse\Model\SpecialisationCourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialisation extends SmartModel
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
        'material'
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'specification_course')
                    ->using(SpecialisationCourse::class);
    }
}
