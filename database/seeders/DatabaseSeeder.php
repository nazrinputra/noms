<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NoteSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AssetSeeder;
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
            AssetSeeder::class,
            ReportSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            NoteSeeder::class,
        ]);
    }
}
