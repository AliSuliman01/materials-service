<?php


namespace App\Domain\Categories\CategoryImages\Observer;

use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use Illuminate\Support\Facades\Auth;


class CategoryImageObserver
{
	  /**
     * Handle the CategoryImage "created" event.
     *
     * @param  \App\Domain\Categories\CategoryImages\Model\CategoryImage  $categoryImage
     * @return void
     */
    public function creating(CategoryImage $categoryImage)
    {
        $categoryImage->created_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryImage "updated" event.
     *
     * @param  \App\Domain\Categories\CategoryImages\Model\CategoryImage  $categoryImage
     * @return void
     */
    public function updating(CategoryImage $categoryImage)
    {
        $categoryImage->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryImage "deleted" event.
     *
     * @param  \App\Domain\Categories\CategoryImages\Model\CategoryImage  $categoryImage
     * @return void
     */
    public function deleting(CategoryImage $categoryImage)
    {
        $categoryImage->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryImage "restored" event.
     *
     * @param  \App\Domain\Categories\CategoryImages\Model\CategoryImage  $categoryImage
     * @return void
     */
    public function restored(CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Handle the CategoryImage "force deleted" event.
     *
     * @param  \App\Domain\Categories\CategoryImages\Model\CategoryImage  $categoryImage
     * @return void
     */
    public function forceDeleted(CategoryImage $categoryImage)
    {
        //
    }
}
