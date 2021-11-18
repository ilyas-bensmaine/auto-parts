<?php

namespace Database\Seeders;

use App\Models\Piece;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(PieceSeeder::class);

        DB::statement("
                INSERT INTO `nationalities`( `phone`, `code`, `name`, `continent`) VALUES
                ( 213, 'DZ', 'الجزائر', 'Africa'),
                ( 86, 'CN', 'الصين', 'Asia'),
                ( 33, 'FR', 'فرنسا', 'Europe'),
                ( 49, 'DE', 'ألمانيا', 'Europe'),
                ( 39, 'IT', 'إيطاليا', 'Europe'),
                ( 850, 'KP', 'كوريا، الجمهورية الشعبية الديمقراطية', 'Asia'),
                ( 34, 'ES', 'إسبانيا', 'Europe'),
                ( 971, 'AE', 'الإمارات العربية المتحدة', 'Asia'),
                ( 44, 'GB', 'المملكة المتحدة', 'Europe'),
                ( 1, 'US', 'الولايات المتحدة', 'North America')
                    ");

        DB::statement("
           INSERT INTO `marques`( `nom`, `noma`) VALUES
                ('ACURA', 'Acura'),
                ('ALFA', 'Alfa Romeo'),
                ('AMC', 'AMC'),
                ('ASTON', 'Aston Martin'),
                ('AUDI', 'Audi'),
                ('AVANTI', 'Avanti'),
                ('BENTL', 'Bentley'),
                ('BMW', 'BMW'),
                ('BUICK', 'Buick'),
                ( 'CAD', 'Cadillac'),
                ( 'CHEV', 'Chevrolet'),
                ( 'CHRY', 'Chrysler'),
                ( 'DAEW', 'Daewoo'),
                ( 'DAIHAT', 'Daihatsu'),
                ( 'DATSUN', 'Datsun'),
                ( 'DELOREAN', 'DeLorean'),
                ( 'DODGE', 'Dodge'),
                ( 'EAGLE', 'Eagle'),
                ( 'FER', 'Ferrari'),
                ( 'FIAT', 'FIAT'),
                ( 'FISK', 'Fisker'),
                ( 'FORD', 'Ford'),
                ( 'FREIGHT', 'Freightliner'),
                ( 'GEO', 'Geo'),
                ( 'GMC', 'GMC'),
                ( 'HONDA', 'Honda'),
                ( 'AMGEN', 'HUMMER'),
                ( 'HYUND', 'Hyundai'),
                ( 'INFIN', 'Infiniti'),
                ( 'ISU', 'Isuzu'),
                ( 'JAG', 'Jaguar'),
                ( 'JEEP', 'Jeep'),
                ( 'KIA', 'Kia'),
                ( 'LAM', 'Lamborghini'),
                ( 'LAN', 'Lancia'),
                ( 'ROV', 'Land Rover'),
                ( 'LEXUS', 'Lexus'),
                ( 'LINC', 'Lincoln'),
                ( 'LOTUS', 'Lotus'),
                ( 'MAS', 'Maserati'),
                ( 'MAYBACH', 'Maybach'),
                ( 'MAZDA', 'Mazda'),
                ( 'MCLAREN', 'McLaren'),
                ( 'MB', 'Mercedes-Benz'),
                ( 'MERC', 'Mercury'),
                ( 'MERKUR', 'Merkur'),
                ( 'MINI', 'MINI'),
                ( 'MIT', 'Mitsubishi'),
                ( 'NISSAN', 'Nissan'),
                ( 'OLDS', 'Oldsmobile'),
                ( 'PEUG', 'Peugeot'),
                ( 'PLYM', 'Plymouth'),
                ( 'PONT', 'Pontiac'),
                ( 'POR', 'Porsche'),
                ( 'RAM', 'RAM'),
                ( 'REN', 'Renault'),
                ( 'RR', 'Rolls-Royce'),
                ( 'SAAB', 'Saab'),
                ( 'SATURN', 'Saturn'),
                ( 'SCION', 'Scion'),
                ( 'SMART', 'smart'),
                ( 'SRT', 'SRT'),
                ( 'STERL', 'Sterling'),
                ( 'SUB', 'Subaru'),
                ( 'SUZUKI', 'Suzuki'),
                ( 'TESLA', 'Tesla'),
                ( 'TOYOTA', 'Toyota'),
                ( 'TRI', 'Triumph'),
                ( 'VOLKS', 'Volkswagen'),
                ( 'VOLVO', 'Volvo'),
                ( 'YUGO', 'Yugo')
                ;

        ");
        DB::statement("

            INSERT INTO `modeles`( `marque_id`, `nom`, `noma`) values
            (1, 'CL_MODELS', 'CL Models (4)'),
            (1, '2.2CL', ' - 2.2CL'),
            (1, '2.3CL', ' - 2.3CL'),
            (1, '3.0CL', ' - 3.0CL'),
            (1, '3.2CL', ' - 3.2CL'),
            (2, 'ALFA164', '164'),
            ( 2, 'ALFA8C', '8C Competizione'),
            ( 2, 'ALFAGT', 'GTV-6'),
            ( 2, 'MIL', 'Milano'),
            ( 2, 'SPID', 'Spider'),
            ( 2, 'ALFAOTH', 'Other Alfa Romeo Models'),
            ( 3, 'AMCALLIAN', 'Alliance'),
            ( 3, 'CON', 'Concord'),
            ( 3, 'EAGLE', 'Eagle'),
            ( 3, 'AMCENC', 'Encore'),
            ( 3, 'AMCSPIRIT', 'Spirit');

        ");
        $user = User::find(1);
        $user->modeles()->attach([1 , 2 , 3 , 4]);
        $user->marques()->attach([1 , 2 , 3 , 4]);
        $user->pieces()->attach([1 , 2 , 3 , 4]);
        $user->categories()->attach([1 , 2 , 3 , 4]);

        $user = User::find(2);
        $user->modeles()->attach([3,4,5,6]);
        $user->marques()->attach([3,4,5,6]);
        $user->pieces()->attach([3,4,5,6]);
        $user->categories()->attach([3,4,5,6]);

        $user = User::find(3);
        $user->modeles()->attach([4,5,6,7]);
        $user->marques()->attach([4,5,6,7]);
        $user->pieces()->attach([4,5,6,7]);
        $user->categories()->attach([4,5,6,7]);

        $pieces = Piece::all();
        foreach($pieces as $piece){
            $piece->compatible_with()->attach([random_int(1,8),random_int(9,16)]);
            $piece->categories()->attach([random_int(1,10)]);
        }

    }
}
