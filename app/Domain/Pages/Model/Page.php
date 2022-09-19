<?php

namespace App\Domain\Pages\Model;

use App\Domain\Categories\Categories\Model\Category;
use App\Domain\Pages\PageCategory\Model\PageCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
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

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'page_category')
                    ->using(PageCategory::class);
    }
}
