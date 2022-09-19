<?php

namespace App\Domain\Categories\CategoryImages\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryImage extends SmartModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
