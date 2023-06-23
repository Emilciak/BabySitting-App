<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rodzic;
class RodzicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rodzic')->insert([
            [Rodzic::FIELD_IMIE=> 'Ania', Rodzic::FIELD_NAZWISKO => 'Kowalska', Rodzic::FIELD_ILEDZIECI => 1],
            [Rodzic::FIELD_IMIE=> 'Mariola', Rodzic::FIELD_NAZWISKO => 'Nowak', Rodzic::FIELD_ILEDZIECI => 1],
            [Rodzic::FIELD_IMIE=> 'Kasia', Rodzic::FIELD_NAZWISKO => 'Wiko', Rodzic::FIELD_ILEDZIECI => 2],
            ]);
    }
}
