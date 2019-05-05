<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Beer', 'slug' => 'beer', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wine', 'slug' => 'wine', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Liquor', 'slug' => 'liquor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Extras', 'slug' => 'extras', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
