<?php

use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Category::class, 5)->create();
        for ($i=0; $i < 3; $i++) { 
        DB::table('categories')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
        ]);
        }
    }
}
