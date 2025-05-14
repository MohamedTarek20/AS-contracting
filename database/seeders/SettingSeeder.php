<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'identifier' => 'website_phone',
                'value'      => '',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_email',
                'value'      => '',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_address',
                'value'      => '',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_about_ar',
                'value'      => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing.',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_about_en',
                'value'      => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing.',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_about_zh_cn',
                'value'      => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing.',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_facebook',
                'value'      => '#',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_twitter',
                'value'      => '#',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_linkedin',
                'value'      => '#',
                'type'       => 'text'
            ],
            [
                'identifier' => 'website_instagram',
                'value'      => '#',
                'type'       => 'text'
            ],
            [
                'identifier' => 'contact_map',
                'value'     => '',
            ],
        ];


        foreach ($settings as $setting) {
            Setting::firstOrCreate([
                'identifier' => $setting['identifier'],
            ],[
                'identifier' => $setting['identifier'],
                'value'     => $setting['value'],
            ]);
        }
    }
}
