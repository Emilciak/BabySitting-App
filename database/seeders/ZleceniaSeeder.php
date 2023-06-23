<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Zlecenia;

class ZleceniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zlecenia')->insert([
            [Zlecenia::FIELD_ID_DZIECKA=> 1, Zlecenia::FIELD_ID_OPIEKUNA=>1, Zlecenia::FIELD_CZAS=>120],
            [Zlecenia::FIELD_ID_DZIECKA=> 2, Zlecenia::FIELD_ID_OPIEKUNA=>2, Zlecenia::FIELD_CZAS=>60],
            [Zlecenia::FIELD_ID_DZIECKA=> 3, Zlecenia::FIELD_ID_OPIEKUNA=>3, Zlecenia::FIELD_CZAS=>30],
            ]);
    }
}
