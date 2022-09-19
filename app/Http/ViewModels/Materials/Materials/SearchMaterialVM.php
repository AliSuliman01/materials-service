<?php


namespace App\Http\ViewModels\Materials\Materials;

use App\Domain\Materials\Materials\Model\Material;
use Illuminate\Contracts\Support\Arrayable;


class SearchMaterialVM implements Arrayable
{

    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function toArray()
    {
        return Material::with([
            'translation',
            'images',
            'categories',
        ])
            ->whereRelation('translation', 'name', 'like', "%$this->string%")
            ->get();
    }
}
