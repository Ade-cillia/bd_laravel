<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            [
                'name' => 'Les simpson',
                'publication_year' => 1993,
                'affiliate_comic' => 'autreComics',
                'draftsman' => 1
            ],
            [
                'name' => 'Mélusine',
                'publication_year' => 1996,
                'affiliate_comic' => 'jspCeQueC\'est',
                'draftsman' => 2
            ],
            [
                'name' => 'Les schtroumpfs',
                'publication_year' => 1958,
                'affiliate_comic' => 'Moi non plus',
                'draftsman' => 3
            ],
            [
                'name' => 'Futurama',
                'publication_year' => 2003,
                'affiliate_comic' => 'Les simpson',
                'draftsman' => 1
            ],
        ]);
    }
}
