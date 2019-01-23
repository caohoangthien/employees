<?php

use Illuminate\Database\Seeder;
use App\SideMenu;

class SideMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SideMenu::insert([
            ['name' => 'Quản lý nhân viên'],
            ['name' => 'Quản lý tin tức'],
            ['name' => 'Quản lý tuyển dụng'],
            ['name' => 'Quản lý tiền lương']
        ]);
    }
}
