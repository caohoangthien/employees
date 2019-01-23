<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($count = 1; $count <= 100; $count++) {
            $employees[] = [
                'email' => 'employee' . $count . '@gmail.com',
                'name'  => $faker->name,
                'address' => $faker->address,
                'status' => rand(1,2),
                'created_at' => Carbon::now()->subDays($count),
                'updated_at' => Carbon::now()->subDays($count)
            ];
        }

        Employee::insert($employees);
    }
}
