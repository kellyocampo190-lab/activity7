<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoboticsKitSeeder::class,
        ]);

        factory(App\Course::class, 100)->create();
    }
}
