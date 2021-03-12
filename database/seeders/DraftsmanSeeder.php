<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DraftsmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('draftsmen')->insert([
            [
                'name' => 'Matthew Abram Groening',
                'birth_year' => 1954,
                'nationality' => 'Américain',
            ],
            [
                'name' => 'Clarke',
                'birth_year' => 1867,
                'nationality' => 'Irlandais',
            ],
            [
                'name' => 'Peyo',
                'birth_year' => 1928,
                'nationality' => 'Belge',
            ],
        ]);
    }
}
