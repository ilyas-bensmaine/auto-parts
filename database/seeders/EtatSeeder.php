<?php

namespace Database\Seeders;

use App\Models\Etat;
use Illuminate\Database\Seeder;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etat::create([
            'nom' => 'Originale',
            'noma' => 'أصليـــة'
        ]);
        Etat::create([
            'nom' => 'La casse',
            'noma' => 'مستعملة'
        ]);
        Etat::create([
            'nom' => 'Copie',
            'noma' => 'مقلدة'
        ]);
    }
}
