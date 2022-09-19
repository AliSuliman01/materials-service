<?php


namespace App\Http\ViewModels\Tips\Tips;

use App\Domain\Tips\Tips\Model\Tip;
use Illuminate\Contracts\Support\Arrayable;


class GetTipVM implements Arrayable
{

    private $tip;

    public function __construct($tip)
    {
        $this->tip = $tip;
    }

    public function toArray()
    {
        return  $this->tip;
    }
}
