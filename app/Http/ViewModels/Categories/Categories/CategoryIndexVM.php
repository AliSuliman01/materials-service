<?php


namespace App\Http\ViewModels\Categories\Categories;

use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Contracts\Support\Arrayable;
use Yajra\DataTables\Facades\DataTables;

class CategoryIndexVM implements Arrayable
{

    public function get_categories(){

    	return DataTables::eloquent(Category::with(['translations','images','categories','materials']))->toJson();
	}
    public function toArray()
    {
        return $this->get_categories();
    }
}
