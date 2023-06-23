<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rozliczenia;
class RozliczeniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rozliczenia')->insert([
            [Rozliczenia::FIELD_ID_ZLECENIA => 1, Rozliczenia::FIELD_ID_OPIEKUNA=>1, Rozliczenia::FIELD_ROZLICZENIA=>200],
            [Rozliczenia::FIELD_ID_ZLECENIA => 2, Rozliczenia::FIELD_ID_OPIEKUNA=>2, Rozliczenia::FIELD_ROZLICZENIA=>100],
            [Rozliczenia::FIELD_ID_ZLECENIA => 3, Rozliczenia::FIELD_ID_OPIEKUNA=>3, Rozliczenia::FIELD_ROZLICZENIA=>50],
            ]);
    }
}
