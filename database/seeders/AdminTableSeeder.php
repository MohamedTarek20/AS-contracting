<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Admin::updateOrCreate([
            'email'     => 'admin@admin.com'
        ],[
            'name'      =>  'admin',
            'email'     => 'admin@admin.com',
            'password'  => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
