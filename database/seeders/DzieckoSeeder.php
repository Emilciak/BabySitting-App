<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dziecko;
class DzieckoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dziecko')->insert([
            [Dziecko::FIELD_IMIE=>'Zosia', Dziecko::FIELD_ID_RODZICA=> 1],
            [Dziecko::FIELD_IMIE=>'Asia', Dziecko::FIELD_ID_RODZICA=> 2],
            [Dziecko::FIELD_IMIE=>'Patryk', Dziecko::FIELD_ID_RODZICA=> 3],
            [Dziecko::FIELD_IMIE=>'Patrycja', Dziecko::FIELD_ID_RODZICA=> 3],
            ]);
    }
}
