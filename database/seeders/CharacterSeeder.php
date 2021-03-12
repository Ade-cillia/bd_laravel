<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Characters')->insert([
            [
                'name' => 'Bart Simpson',
                'publication_year' => 1993,
                'affiliate_comic' => 'Les simpson',
                'draftsman_id' => 1
            ],
            [
                'name' => 'Lisa Simpson',
                'publication_year' => 1993,
                'affiliate_comic' => 'Les simpson',
                'draftsman_id' => 1
            ],
            [
                'name' => 'Mélusine',
                'publication_year' => 1996,
                'affiliate_comic' => 'Mélusine',
                'draftsman_id' => 2
            ],
            [
                'name' => 'schtroumpfs gourmant',
                'publication_year' => 1958,
                'affiliate_comic' => 'Les schtroumpfs',
                'draftsman_id' => 3
            ],
            [
                'name' => 'schtroumpfs grognon',
                'publication_year' => 1958,
                'affiliate_comic' => 'Les schtroumpfs',
                'draftsman_id' => 3
            ],
            [
                'name' => 'schtroumpfs maladroit',
                'publication_year' => 1959,
                'affiliate_comic' => 'Les schtroumpfs',
                'draftsman_id' => 3
            ],
            [
                'name' => 'Turanga Leela',
                'publication_year' => 2003,
                'affiliate_comic' => 'Futurama',
                'draftsman_id' => 1
            ],
            [
                'name' => 'Philip J. Fry',
                'publication_year' => 2003,
                'affiliate_comic' => 'Futurama',
                'draftsman_id' => 1
            ],
            [
                'name' => 'Docteur Zoidberg',
                'publication_year' => 2003,
                'affiliate_comic' => 'Futurama',
                'draftsman_id' => 1
            ],
        ]);
    }
}
