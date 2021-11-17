<?php

namespace Database\Seeders;

use App\Models\Piece;
use Illuminate\Database\Seeder;

class PieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Piece::factory(50)->create();
    }
}
