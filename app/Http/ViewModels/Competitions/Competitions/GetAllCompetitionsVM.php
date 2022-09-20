<?php


namespace App\Http\ViewModels\Competitions\Competitions;

use App\Domain\Competitions\Competitions\Model\Competition;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCompetitionsVM implements Arrayable
{
    public function toArray()
    {
        return Competition::query()->get();
    }
}
