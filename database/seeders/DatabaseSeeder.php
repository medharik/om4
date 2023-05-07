<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

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
        // \App\Models\Produit::factory(1000)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\Cours::factory(9000)->create();
        Student::factory(1000)->create();
    }
}
