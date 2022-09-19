<?php


namespace App\Domain\Categories\CategoryTranslation\Observer;

use App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation;
use Illuminate\Support\Facades\Auth;


class CategoryTranslationObserver
{
	  /**
     * Handle the CategoryTranslation "created" event.
     *
     * @param  \App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation  $categoryTranslation
     * @return void
     */
    public function creating(CategoryTranslation $categoryTranslation)
    {
        $categoryTranslation->created_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryTranslation "updated" event.
     *
     * @param  \App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation  $categoryTranslation
     * @return void
     */
    public function updating(CategoryTranslation $categoryTranslation)
    {
        $categoryTranslation->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryTranslation "deleted" event.
     *
     * @param  \App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation  $categoryTranslation
     * @return void
     */
    public function deleting(CategoryTranslation $categoryTranslation)
    {
        $categoryTranslation->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the CategoryTranslation "restored" event.
     *
     * @param  \App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation  $categoryTranslation
     * @return void
     */
    public function restored(CategoryTranslation $categoryTranslation)
    {
        //
    }

    /**
     * Handle the CategoryTranslation "force deleted" event.
     *
     * @param  \App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation  $categoryTranslation
     * @return void
     */
    public function forceDeleted(CategoryTranslation $categoryTranslation)
    {
        //
    }
}
