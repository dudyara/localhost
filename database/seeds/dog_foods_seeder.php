<?php

use Illuminate\Database\Seeder;

class dog_foods_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('user_statuses')->insert([
                'status_name' => Str::random(20),
            ]);
        }

        for ($i = 1; $i <= 100; $i++) {
            DB::table('cat_foods')->insert([
                'food_name' => Str::random(20),
                'food_value' => rand(1, 100),
                'food_quantity' => rand(1, 100),
                'food_type' => Str::random(20),
                'status_id'=> rand(1, 50)
            ]);
        }

            for ($i = 1; $i <= 100; $i++) {
                DB::table('dog_foods')->insert([
                    'food_name' => Str::random(20),
                    'food_value' => rand(1, 100),
                    'food_quantity' => rand(1, 100),
                    'food_type' => Str::random(20),
                    'status_id' => rand(1, 50)
                ]);
            }
                for ($i = 1; $i <= 100; $i++) {
                    DB::table('cat_breeds')->insert([
                        'breed_name' => Str::random(20),
                        'breed_length_of_life' => Str::random(20),
                        'breed_max_size' => Str::random(20),
                        'breed_type' => Str::random(20),
                        'breed_description' => Str::random(100),
                        'breed_food_id' => rand(1, 50)
                    ]);
                }
        for ($i = 1; $i <= 100; $i++) {
            DB::table('dog_breeds')->insert([
                'breed_name' => Str::random(20),
                'breed_length_of_life' => Str::random(20),
                'breed_max_size' => Str::random(20),
                'breed_type' => Str::random(20),
                'breed_description' => Str::random(100),
                'breed_food_id' => rand(1, 50)
            ]);
        }
        }


}
