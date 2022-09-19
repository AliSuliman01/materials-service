<?php

namespace App\Domain\Materials\Materials\Model;

use App\Domain\Categories\Categories\Model\Category;
use App\Domain\Materials\Courses\Courses\Model\Course;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use App\Domain\Materials\MaterialImages\Model\MaterialImage;
use App\Domain\Materials\MaterialTranslation\Model\MaterialTranslation;
use App\Domain\Materials\Projects\Projects\Model\Project;
use App\Domain\Materials\Specialisations\Specialisations\Model\Specialisation;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Material extends SmartModel
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

    protected $with = [
        'specialization',
        'course',
        'project'
    ];

    public function translation()
    {
        return $this->hasOne(MaterialTranslation::class)
            ->where('language_code', App::getLocale());
    }

    public function translations()
    {
        return $this->hasMany(MaterialTranslation::class);
    }

    public function images()
    {
        return $this->hasMany(MaterialImage::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'material_category')
            ->using(MaterialCategory::class);
    }

    public function specialization()
    {
        return $this->hasOne(Specialisation::class, 'material_id', 'id');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'material_id', 'id');
    }

    public function project()
    {
        return $this->hasOne(Project::class, 'material_id', 'id');
    }
}
