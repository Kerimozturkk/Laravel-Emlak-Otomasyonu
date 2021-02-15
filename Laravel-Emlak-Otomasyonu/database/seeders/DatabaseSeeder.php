<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\House;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HouseTableSeeder::class);
    }
}
