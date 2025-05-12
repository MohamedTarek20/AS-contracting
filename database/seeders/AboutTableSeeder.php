<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            // $table->string('title_ar');
            // $table->string('title_en');
            // $table->string('title_zh_cn');
            // $table->text('description_ar');
            // $table->text('description_en');
            // $table->text('description_zh_cn');
        $abouts = [
            [
                'identifier'         => 'who_we_are',
                'title_ar'              => 'Who We Are',
                'title_en'              => 'Who We Are',
                'title_zh_cn'              => 'Who We Are',
                'description_ar'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_en'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_zh_cn'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
            ],
            [
                'identifier'         => 'our_vision',
                'title_ar'              => 'Our Vision',
                'title_en'              => 'Our Vision',
                'title_zh_cn'              => 'Our Vision',
                'description_ar'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_en'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_zh_cn'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
            ],
            [
                'identifier'         => 'our_mission',
                'title_ar'              => 'Our Mission',
                'title_en'              => 'Our Mission',
                'title_zh_cn'              => 'Our Mission',
                'description_ar'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_en'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
                'description_zh_cn'        => 'nonummy nibh tempor cum soluta nobis adipiscing eleifend option nihil imperdiet Lorem ipsum dolor sit amet consectetur.',
            ],
        ];


        foreach ($abouts as $about) {
            About::firstOrCreate([
                'identifier'         => $about['identifier'],
                'title_ar'              => $about['title_ar'],
                'title_en'              => $about['title_en'],
                'title_zh_cn'              => $about['title_zh_cn'],
                'description_ar'        => $about['description_ar'],
                'description_en'        => $about['description_en'],
                'description_zh_cn'        => $about['description_zh_cn'],
            ]);
        }
    }
}
