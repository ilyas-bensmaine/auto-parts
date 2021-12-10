<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Schema;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->loadData();
        $this->command->comment("Wilayas/Communes already loaded");
    }


    protected function loadData()
    {
        $this->insertWilayas();
    }

    protected function insertWilayas()
    {
        // Load wilayas from json
        $wilayas_json = json_decode(file_get_contents(database_path('seeders/json/Wilaya_Of_Algeria.json')));

        // Insert Wilayas
        $data = [];
        foreach ($wilayas_json as $wilaya) {
            $data[] = [
                'id'          => $wilaya->id,
                'code'        => $wilaya->code,
                'name'        => $wilaya->name,
                'arabic_name' => $wilaya->arabic_name,
                'longitude'   => $wilaya->longitude,
                'latitude'    => $wilaya->latitude,
                'created_at'  => now(),
            ];
        }
        DB::table('wilayas')->insert($data);
    }

}
