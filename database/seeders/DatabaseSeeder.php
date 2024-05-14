<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet;
use App\Models\Item;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PetsTable::class,
            ItemsTable::class,
        ]);
    }
}
