<?php


namespace App\Http\ViewModels\Materials\MaterialStatus\MaterialStatus;

use App\Domain\Materials\MaterialStatus\MaterialStatus\Model\MaterialStatus;
use Illuminate\Contracts\Support\Arrayable;


class GetMaterialStatusVM implements Arrayable
{

    private $material_status;

    public function __construct($material_status)
    {
        $this->material_status = $material_status;
    }

    public function toArray()
    {
        return  $this->material_status;
    }
}
