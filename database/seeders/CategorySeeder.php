<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Tạo 20 danh mục mẫu
        Category::factory()->count(20)->create();
    }
}


