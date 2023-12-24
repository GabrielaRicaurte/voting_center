<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'category' => 'category1' ],
            [ 'category' => 'category2' ],
            [ 'category' => 'category3' ],
            [ 'category' => 'category4' ],
            [ 'category' => 'category5' ],

        ];

        foreach ($data as $key) {
            Category::create($key);
        }
    }
}
