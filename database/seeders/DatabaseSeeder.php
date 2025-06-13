<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->callCommand();

        $this->call([
            UserSeeder::class
        ]);
    }

    /**
     * call common artisan command
     * php artisan shield:generate --all
     */
    public function callCommand(): void
    {
        Artisan::call('shield:super-admin');
    }
}
