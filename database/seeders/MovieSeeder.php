<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'movieName' => 'The Amazing Spider-Man',
            'genre' => 'Action',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjMyOTM4MDMxNV5BMl5BanBnXkFtZTcwNjIyNzExOA@@._V1_.jpg',
            'description' => 'After Peter Parker is bitten by a genetically altered spider, he gains newfound, spider-like powers and ventures out to save the city from the machinations of a mysterious reptilian foe.'
        ]);

        DB::table('movies')->insert([
            'movieName' => 'Iron Man',
            'genre' => 'Action',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTczNTI2ODUwOF5BMl5BanBnXkFtZTcwMTU0NTIzMw@@._V1_.jpg',
            'description' => 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.'
        ]);

        DB::table('movies')->insert([
            'movieName' => 'Captain America: The First Avenger',
            'genre' => 'Action',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTYzOTc2NzU3N15BMl5BanBnXkFtZTcwNjY3MDE3NQ@@._V1_UY1200_CR69,0,630,1200_AL_.jpg',
            'description' => 'Steve Rogers, a rejected military soldier, transforms into Captain America after taking a dose of a Super-Soldier serum.'
        ]);
    }
}
