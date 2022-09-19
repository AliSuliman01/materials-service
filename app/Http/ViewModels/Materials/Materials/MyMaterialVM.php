<?php


namespace App\Http\ViewModels\Materials\Materials;

use App\Domain\Materials\Materials\Model\Material;
use App\Domain\Users\Users\Model\User;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Auth;


class MyMaterialVM implements Arrayable
{
    public function toArray()
    {
        return Auth::user()->materials()->with([
            'translation',
            'images',
            'categories',
        ])
            ->get();
    }
}
