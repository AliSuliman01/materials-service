<?php

namespace App\Domain\Categories\Categories\Model;

use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use App\Domain\Materials\Materials\Model\Material;
use App\Domain\Pages\Model\Page;
use App\Domain\Pages\PageCategory\Model\PageCategory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Category extends SmartModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $hidden = [
        'created_by_user_id',
        'updated_by_user_id',
        'deleted_by_user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $with = [
        'translation'
    ];
    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class,'category_id');
    }

    public function translation()
    {
        return $this->hasOne(CategoryTranslation::class,'category_id')
            ->where('language_code',App::getLocale());
    }

    public function images()
    {
        return $this->hasMany(CategoryImage::class,'category_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class,'parent_category_id');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_category')
                    ->using(MaterialCategory::class);
    }

    public function pages()
    {
        return $this->belongsToMany(Page::class,'page_category')
            ->using(PageCategory::class);
    }
}
