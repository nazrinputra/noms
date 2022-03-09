<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ReportSeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\IncidentSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IncidentSeeder::class,
            CustomerSeeder::class,
            ReportSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
