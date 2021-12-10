<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Subcategory;
use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'nom' => 'Lourd',
            'noma'=> 'الوزن الثقيل'
        ]);
        Type::create([
            'nom' => 'Leger',
            'noma'=> 'الوزن الخفيف'
        ]);
        Type::create([
            'nom' => 'Moto',
            'noma'=> 'الدراجات النارية'
        ]);
        // Category::factory(10)->create();
        // Subcategory::factory(100)->create();
        // Marque::factory(10)->create();
    }
}
