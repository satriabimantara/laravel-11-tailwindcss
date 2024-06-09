<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        PostCategory::create([
            "name" => "Data Science",
            "slug" => "data-science"
        ]);
        PostCategory::create([
            "name" => "Machine Learning",
            "slug" => "machine-learning"
        ]);
        PostCategory::create([
            "name" => "Advanced Mathematics",
            "slug" => "advanced-mathematics"
        ]);
    }
}
