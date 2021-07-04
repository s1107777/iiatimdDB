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
        DB::table('movies')->insert([
            'movieName' => 'Infinite',
            'genre' => 'Action',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZTU5MmY0ZjctYTNlOS00MDIyLWJkZTAtNzBiOTkyNWI5MGY2XkEyXkFqcGdeQXVyNTc4MjczMTM@._V1_.jpg',
            'description' => 'A sci-fi, action adaption that examines the concept of reincarnation through remarkable visuals and well-established characters who need to use their memories and past learnt skills to ensure the future is protected from Infinites that seek...'
        ]);
        DB::table('movies')->insert([
            'movieName' => "The Hitman's Bodyguard",
            'genre' => 'Action',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjQ5NjA2NDg1MV5BMl5BanBnXkFtZTgwMDAzNDc4MjI@._V1_.jpg',
            'description' => 'With his reputation in tatters after the painfully unsuccessful delivery of a distinguished Japanese client, the former triple-A protection agent, Michael Bryce, is now reduced to a mere second-class bodyguard for hire, two years after...'
        ]);

        DB::table('movies')->insert([
            'movieName' => 'The Suicide Squad',
            'genre' => 'Adventure',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNGM3YzdlOWYtNjViZS00MTE2LWE1MWUtZmE2ZTcxZjcyMmU3XkEyXkFqcGdeQXVyODEyMTI1MjA@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'description' => 'Supervillains Harley Quinn, Bloodsport, Peacemaker and a collection of nutty cons at Belle Reve prison join the super-secret, super-shady Task Force X as they are dropped off at the remote, enemy-infused island of Corto Maltese.'
        ]);
        DB::table('movies')->insert([
            'movieName' => 'Jumanji: Welcome to the Jungle',
            'genre' => 'Adventure',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNzAxY2U1YTktN2E0Mi00NGY3LTgwMWQtZWYyNDk3ZDg4NzMzXkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_.jpg',
            'description' => "In a brand-new Jumanji adventure, four high-school kids discover an old video-game console and are drawn into the game's jungle setting, literally becoming the adult avatars they chose. What they discover is that you don't just play Jumanji..."        
        ]);
        DB::table('movies')->insert([
            'movieName' => 'The Ice Road',
            'genre' => 'Adventure',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZDFiZTE4NWEtMGNkNC00YjhlLTk0YjMtNDA3NWRhMjc3MTM2XkEyXkFqcGdeQXVyOTA5NzQ0MDQ@._V1_.jpg',
            'description' => 'After a remote diamond mine collapses in the far northern regions of Canada, an ice driver leads an impossible rescue mission over a frozen ocean to save the lives of trapped miners despite thawing waters and a threat they never see coming.'
        ]);
        DB::table('movies')->insert([
            'movieName' => 'Black Widow',
            'genre' => 'Adventure',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYjdmODAzNTctNWU1NS00ZmRiLWFiM2YtMjAyNzgzZWJlZjhlXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
            'description' => 'At birth the Black Widow "aka Natasha Romanova" is given to the KGB, which grooms her to become its ultimate operative. When the U.S.S.R. breaks up, the government tries to kill her as...'
        ]);
        DB::table('movies')->insert([
            'movieName' => "Zack Snyder's Justice League",
            'genre' => 'Adventure',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYjI3NDg0ZTEtMDEwYS00YWMyLThjYjktMTNlM2NmYjc1OGRiXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
            'description' => "Determined to ensure Superman's ultimate sacrifice was not in vain, Bruce Wayne aligns forces with Diana Prince with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions."
        ]);

        DB::table('movies')->insert([
            'movieName' => "F9",
            'genre' => 'Crime',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjI0NmFkYzEtNzU2YS00NTg5LWIwYmMtNmQ1MTU0OGJjOTMxXkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_.jpg',
            'description' => "Cipher enlists the help of Jakob, Dom's younger brother to take revenge on Dom and his team."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Joker",
            'genre' => 'Crime',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
            'description' => "In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker."
        ]);
        DB::table('movies')->insert([
            'movieName' => "The Wolf of Wall Street",
            'genre' => 'Crime',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@._V1_.jpg',
            'description' => "Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Girl in the Basement",
            'genre' => 'Crime',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTdkYWE4ZGQtOGZkMy00ZTg1LWE5ODEtZWRlMjQ3NWQ2N2I2XkEyXkFqcGdeQXVyNjU0NTI0Nw@@._V1_.jpg',
            'description' => "Sara is a teen girl who is looking forward to her 18th birthday to move away from her controlling father Don. But before she could even blow out the candles, Don imprisons her in the basement of their home."
        ]);
        DB::table('movies')->insert([
            'movieName' => "John Wick",
            'genre' => 'Crime',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTU2NjA1ODgzMF5BMl5BanBnXkFtZTgwMTM2MTI4MjE@._V1_.jpg',
            'description' => "An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took everything from him."
        ]);

        DB::table('movies')->insert([
            'movieName' => "Bad Boys for Life",
            'genre' => 'Comedy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
            'description' => "Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Deadpool",
            'genre' => 'Comedy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYzE5MjY1ZDgtMTkyNC00MTMyLThhMjAtZGI5OTE1NzFlZGJjXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
            'description' => "A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Bad Moms",
            'genre' => 'Comedy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjIwNzE5MTgwNl5BMl5BanBnXkFtZTgwNjM4OTA0OTE@._V1_.jpg',
            'description' => "When three overworked and under-appreciated moms are pushed beyond their limits, they ditch their conventional responsibilities for a jolt of long overdue freedom, fun and comedic self-indulgence."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Dirty Grandpa",
            'genre' => 'Comedy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMzk0NzkyNDk2M15BMl5BanBnXkFtZTgwNDczOTU3NzE@._V1_UY1200_CR79,0,630,1200_AL_.jpg',
            'description' => "Right before his wedding, an uptight guy is tricked into driving his grandfather, a lecherous former Army Lieutenant Colonel, to Florida for Spring Break."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Bad Neighbours 2",
            'genre' => 'Comedy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTY0NzUxMDUzN15BMl5BanBnXkFtZTgwNzI2MTY4ODE@._V1_SX178_AL_.jpg',
            'description' => "When their new next-door neighbors turn out to be a sorority even more debaucherous than the fraternity previously living there, Mac and Kelly team with their former enemy, Teddy, to bring the girls down."
        ]);

        DB::table('movies')->insert([
            'movieName' => "The Conjuring: The Devil Made Me Do It",
            'genre' => 'Thriller',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BOWRkOTYzZTQtMzQwNi00NDYwLTk4NjUtN2FjYTI4Y2UzM2RjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
            'description' => "The Warrens investigate a murder that may be linked to a demonic possession."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Tenet",
            'genre' => 'Thriller',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg',
            'description' => "Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Godzilla vs. Kong",
            'genre' => 'Thriller',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZmYzMzU4NjctNDI0Mi00MGExLWI3ZDQtYzQzYThmYzc2ZmNjXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_UY1200_CR90,0,630,1200_AL_.jpg',
            'description' => "The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the fearsome Godzilla and the mighty Kong - with humanity caught in the balance."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Security",
            'genre' => 'Thriller',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNzRiNWRmNGUtOTYzMy00OWRlLWJiOWMtNWY5NzBlOTczOGIyXkEyXkFqcGdeQXVyMTA2MDAyNzQ5._V1_.jpg',
            'description' => "A winter's tale in which an incident disrupts the lives of its characters and changes them forever. When the fear lives inside homes and people, what is the price of security?"
        ]);
        DB::table('movies')->insert([
            'movieName' => "The Courier",
            'genre' => 'Thriller',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYjg4YTJlNzMtY2U0OC00N2FjLWI0ZTgtNGM1NDRhMWNhZmRkXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg',
            'description' => "Cold War spy Greville Wynne and his Russian source try to put an end to the Cuban Missile Crisis."
        ]);

        DB::table('movies')->insert([
            'movieName' => "Aquaman",
            'genre' => 'Fantasy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BOTk5ODg0OTU5M15BMl5BanBnXkFtZTgwMDQ3MDY3NjM@._V1_.jpg',
            'description' => "Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Wonder Woman",
            'genre' => 'Fantasy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTYzODQzYjQtNTczNC00MzZhLTg1ZWYtZDUxYmQ3ZTY4NzA1XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
            'description' => "When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Doctor Strange",
            'genre' => 'Fantasy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNjgwNzAzNjk1Nl5BMl5BanBnXkFtZTgwMzQ2NjI1OTE@._V1_.jpg',
            'description' => "While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Kong: Skull Island",
            'genre' => 'Fantasy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZDg0OGM1NWEtNDEwOC00OTE2LTliZWEtNzg1MTZkNjFlMmNhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_UY1200_CR89,0,630,1200_AL_.jpg',
            'description' => "After the Vietnam war, a team of scientists explores an uncharted island in the Pacific, venturing into the domain of the mighty Kong, and must fight to escape a primal Eden."
        ]);
        DB::table('movies')->insert([
            'movieName' => "Aladdin",
            'genre' => 'Fantasy',
            'movieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjQ2ODIyMjY4MF5BMl5BanBnXkFtZTgwNzY4ODI2NzM@._V1_.jpg',
            'description' => "A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true."
        ]);
    }
}
