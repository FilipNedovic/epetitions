<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petition::factory()->times(50)->create();
    }
}