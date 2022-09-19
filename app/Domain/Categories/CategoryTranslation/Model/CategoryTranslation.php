<?php

namespace App\Domain\Categories\CategoryTranslation\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTranslation extends SmartModel
{
    use HasFactory, SoftDeletes, AsPivot;

    protected $guarded = [];

}
