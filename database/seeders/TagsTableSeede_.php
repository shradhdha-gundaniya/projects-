<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class TagsTableSeede_ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['Science','Sport','Politics','Entartainment','Economy']);

        $tags->each(function ($tagName)
        {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        });
    }
}
