<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Desk;
use App\Models\DList;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Desk::factory(10)->create();
        DList::factory(10)->create();
        Card::factory(10)->create();
        Task::factory(10)->create();
    }
}
