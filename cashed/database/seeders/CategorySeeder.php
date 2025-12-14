<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create([
            'name'=>'snack',
            'active' => 1,
        ]);

        Category::query()->create([
            'name'=>'Minuman',
            'active' => 1,
        ]);

        Category::query()->create([
            'name'=>'Makanan berat',
            'active' => 1,
        ]);

        $this->call(DatabaseSeeder::class);

    }
}
