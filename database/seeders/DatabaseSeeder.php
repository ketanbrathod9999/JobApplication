<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\StatesSeeder;
use Database\Seeders\RelationShipStatusSeeder;
use Database\Seeders\LanguagesSeeder;
use Database\Seeders\TechnologiesSeeder;
use Database\Seeders\PreferdLocationSeeder;
use Database\Seeders\DepartmentsSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            StatesSeeder::class,
            RelationShipStatusSeeder::class,
            LanguagesSeeder::class,
            TechnologiesSeeder::class,
            PreferdLocationSeeder::class,
            DepartmentsSeeder::class,
        ]);
    }
}
