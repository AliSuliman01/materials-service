<?php


namespace App\Http\ViewModels\Materials\MaterialStatus\MaterialStatus;

use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;
use Illuminate\Contracts\Support\Arrayable;

class GetAllMaterialStatussVM implements Arrayable
{
    public function toArray()
    {
        return MaterialStatus::query()->get();
    }
}
