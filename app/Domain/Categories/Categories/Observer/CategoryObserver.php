<?php


namespace App\Domain\Categories\Categories\Observer;

use App\Domain\Categories\Categories\Model\Category;
use Illuminate\Support\Facades\Auth;


class CategoryObserver
{
	  /**
     * Handle the Category "created" event.
     *
     * @param  \App\Domain\Categories\Categories\Model\Category  $category
     * @return void
     */
    public function creating(Category $category)
    {
        $category->created_by_user_id = Auth::id();
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Domain\Categories\Categories\Model\Category  $category
     * @return void
     */
    public function updating(Category $category)
    {
        $category->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Domain\Categories\Categories\Model\Category  $category
     * @return void
     */
    public function deleting(Category $category)
    {
        $category->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Domain\Categories\Categories\Model\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Domain\Categories\Categories\Model\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
