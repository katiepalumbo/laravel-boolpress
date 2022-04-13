<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['accessible for disabilites', 'sustainable', 'low carbon footprint', 'car travel', 'plane travel', 'boat travel', 'train travel'];

        foreach($tags as $tag) {

            $new_tag = new Tag();
            $new_tag->tag_name = $tag;
            $new_tag->tag_slug = Str::slug($tag);
            $new_tag->save();

        }
    }
}
