<?php

namespace Database\Seeders;

use App\Domain\Levels\Levels\Model\Level;
use App\Domain\Pages\Model\Page;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $defaultData = json_decode(file_get_contents(__DIR__.'/defaultData.json'), true);

        Page::query()->upsert($defaultData['pages'],['id']);

        foreach ($defaultData['levels'] as $levelObject){
            $level = Level::query()->updateOrCreate(collect($levelObject)->except(['translations'])->toArray());

            $translationsData = collect($level['translations'])->map(function($item)use($level){
                $item['level_id'] = $level->id;
                return $item;
            });

            $level->translations()->upsert($translationsData->toArray(),['id']);
        }

    }
}
