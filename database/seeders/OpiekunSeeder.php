<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Opiekun;
class OpiekunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opiekun')->insert([
            [Opiekun::FIELD_IMIE=>'Paula', Opiekun::FIELD_NAZWISKO=> 'Lip', Opiekun::FIELD_WIEK=> 30, Opiekun::FIELD_ILE_W_ZAWODZIE=>5],
            [Opiekun::FIELD_IMIE=>'Mariola', Opiekun::FIELD_NAZWISKO=> 'Kolma', Opiekun::FIELD_WIEK=> 40, Opiekun::FIELD_ILE_W_ZAWODZIE=>10],
            [Opiekun::FIELD_IMIE=>'Wiktoria', Opiekun::FIELD_NAZWISKO=> 'Durka', Opiekun::FIELD_WIEK=> 25, Opiekun::FIELD_ILE_W_ZAWODZIE=>2],
        ]);
    }
}
