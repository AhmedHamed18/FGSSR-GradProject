<?php

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
        // put array of all sedder files
        $this->call([Program::class,
                    NutritionSeeder::class,
                    NutritionProgramRelationSeeder::class,
                    UserSeeder::class,
                    TrainingSeeder::class,
                    TrainingProgramRelationSeeder::class,
                ]);
    }
}
