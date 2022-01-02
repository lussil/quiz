<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Questao;
use App\Models\Alternativa;

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
            AlternativaSeeder::class,
            QuestaoSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
