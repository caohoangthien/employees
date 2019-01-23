<?php

use Illuminate\Database\Seeder;
use App\TopMenu;

class TopMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopMenu::insert([
            ['name' => 'Công ty'],
            ['name' => 'Hệ thống'],
            ['name' => 'Văn hóa'],
            ['name' => 'Tin tức'],
            ['name' => 'Tuyển dụng']
        ]);
    }
}
