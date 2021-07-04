<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'serieName' => 'Sons of Anarchy',
            'genre' => 'Thriller',
            'seasons' => '7 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTEyODg2NzkwMDBeQTJeQWpwZ15BbWU4MDQwODI3MzIx._V1_.jpg',
            'description' => "Sons of Anarchy, aka SAMCRO, is a motorcycle club that operates both illegal and legal businesses in the small town of Charming. They combine gun-running and a garage, plus involvement in porn film.",
        ]);
        DB::table('series')->insert([
            'serieName' => 'Breaking Bad',
            'genre' => 'Thriller',
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjhiMzgxZTctNDc1Ni00OTIxLTlhMTYtZTA3ZWFkODRkNmE2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
            'description' => "When chemistry teacher Walter White is diagnosed with Stage III cancer and given only two years to live, he decides he has nothing to lose. He lives with his teenage son, who has cerebral palsy, and his wife, in New Mexico.",
        ]);
        DB::table('series')->insert([
            'serieName' => "The Handmaid's Tale",
            'genre' => 'Thriller',
            'seasons' => '4 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZGZiMTkzZjktNzk0OC00NzEzLWJjOTMtYjdkMWM1NGU1ZDM4XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
            'description' => "A religion-based autocracy has taken over most of the United States, renaming the country Gilead. In this country women are second-class citizens. Anyone trying to escape is punished. ",
        ]);
        DB::table('series')->insert([
            'serieName' => 'Élite',
            'genre' => 'Thriller',
            'description' => "Las Encinas is the most exclusive school in the country- where the Elite sends their children to study. In there, three working-class teens have just been admitted after an earthquake destroyed their school.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BODNkMWI2ZTAtYTIzNy00OTYwLTk2M2ItNGQ2NTgxYTU0YWIyXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg'
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Walking Dead',
            'genre' => 'Thriller',
            'description' => "Sheriff Deputy Rick Grimes gets shot and falls into a coma. When awoken he finds himself in a Zombie Apocalypse. Not knowing what to do he sets out to find his family, after he's done that, he gets connected to a group to become the leader.",
            'seasons' => '11 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTc5ZmM0OTQtNDY4MS00ZjMyLTgwYzgtOGY0Y2VlMWFmNDU0XkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Legends of Tomorrow',
            'genre' => 'Adventure',
            'description' => "When heroes alone are not enough - the world needs legends. Having seen the future, one he will desperately try to prevent from happening, time-traveling rogue Rip Hunter is tasked with assembling a disparate group of...",
            'seasons' => '7 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNDUxM2YwODYtYTNlMy00NzZjLWE0MzktYWNhY2MxNWJlMmRlXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
        ]); 
        DB::table('series')->insert([
            'serieName' => 'The Flash',
            'genre' => 'Adventure',
            'description' => "Barry Allen is a Central City police forensic scientist with a reasonably happy life, despite the childhood trauma of a mysterious red and yellow lightning killing his mother and framing his father.",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMDIzNzYwNTctZWY4Mi00YjQ2LWI5YWYtMzdmNDgwMGI4Yzk1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Shadow and Bone',
            'genre' => 'Adventure',
            'description' => "In a world where dark forces have taken over, a young mapmaker, Alina Starkov, accidentally discovers that she has the power to change the fate of the war. She is the only one who has the power to summon light.",
            'seasons' => '2 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNTNhY2JlMmItMGMzZi00ZTM2LTlmNTItZDBkMGVhNGJhYWRhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Lost',
            'genre' => 'Adventure',
            'description' => "The past, present, and future lives of surviving Oceanic Flight 815 passengers are dramatically intertwined as a fight for survival ensues in a quest for answers after crashlanding on a mysterious island.",
            'seasons' => '6 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNzhlY2E5NDUtYjJjYy00ODg3LWFkZWQtYTVmMzU4ZWZmOWJkXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UY1200_CR73,0,630,1200_AL_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Sweet Tooth',
            'genre' => 'Adventure',
            'description' => "A boy who is half human and half deer survives in a post-apocalyptic world with other hybrids.",
            'seasons' => '1 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BOTk4ZDRhYzEtZWExNy00MjIyLTgyYmMtN2Y2MzA4YzZhZTZmXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Hawaii Five-0',
            'genre' => 'Action',
            'description' => "Steve McGarrett comes to Hawaii to avenge his father's death, but when the Governor offers his own task force, he accepts. He picks up team members on the way, Danny Williams, the head detective on his father's case.",
            'seasons' => '10 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BOGMxNDUxMzMtNTgwZS00ZjVlLTkyNmUtNGEzYzQ0YjY3OTAxXkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'S.W.A.T.',
            'genre' => 'Action',
            'description' => "Inspired by the television series and the feature film, S.W.A.T. stars Shemar Moore as a former Marine and locally born and raised S.W.A.T. sergeant, tasked to run a specialized tactical unit that is the last stop in law enforcement in Los Angeles.",
            'seasons' => '4 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTJkMGQxMGItMTlkOC00YWYzLWJhMDEtOTliNjcwNGM1MmFhXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Arrow',
            'genre' => 'Action',
            'description' => "Oliver Queen and his father are lost at sea when their luxury yacht sinks, apparently in a storm. His father dies, but Oliver survives for five years on an uncharted island and eventually returns home.",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTI0NTMwMDgtYTMzZC00YmJhLTg4NzMtMTc1NjI4MWY4NmQ4XkEyXkFqcGdeQXVyNTY3MTYzOTA@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Last Kingdom',
            'genre' => 'Action',
            'description' => "The year is 872, and many of the separate kingdoms of what we now know as England have fallen to the invading Danes, leaving the great kingdom of Wessex standing alone and defiant under the command of King Alfred.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMjE1MzYzNjk3OF5BMl5BanBnXkFtZTgwMzk0MzYwNzE@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Vikings',
            'genre' => 'Action',
            'description' => "The adventures of a Ragnar Lothbrok: the greatest hero of his age. The series tells the saga of Ragnar's band of Viking brothers and his family as he rises to become King of the Viking tribes.",
            'seasons' => '6 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BODk4ZjU0NDUtYjdlOS00OTljLTgwZTUtYjkyZjk1NzExZGIzXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Prison Break',
            'genre' => 'Crime',
            'description' => "An innocent man is framed for the homicide of the Vice President's brother and scheduled to be executed at a super-max penitentiary, thus it's up to his younger brother to save him.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTg3NTkwNzAxOF5BMl5BanBnXkFtZTcwMjM1NjI5MQ@@._V1_UY1200_CR92,0,630,1200_AL_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Blacklist',
            'genre' => 'Crime',
            'description' => "A highly articulate, erudite and intelligent businessman and mastermind, 'Red' Reddington, has allegedly been on the '10 Most Wanted List' of various U.S. law enforcement agencies for over 20 years.",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZDA1MzE3M2EtNTE4Ni00OGE4LWE1NjctYzFhMzA2NDgxMDIxXkEyXkFqcGdeQXVyODUxOTU0OTg@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'La casa de papel',
            'genre' => 'Crime',
            'description' => "An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZDcxOGI0MDYtNTc5NS00NDUzLWFkOTItNDIxZjI0OTllNTljXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Lupin',
            'genre' => 'Crime',
            'description' => "Inspired by the adventures of Arsène Lupin, gentleman thief Assane Diop sets out to avenge his father for an injustice inflicted by a wealthy family.",
            'seasons' => '2 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BZjEyMmUyYmYtNTAwYi00OWUwLWJlNzEtMDM2N2QxNzIwMTdjXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Peaky Blinders',
            'genre' => 'Crime',
            'description' => "Thomas Shelby and his brothers return to Birmingham after serving in the British Army during WWI. Shelby and the Peaky Blinders, the gang he is leader of, control the city of Birmingham But as Shelby's ambitions extend beyond Birmingham.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMTkzNjEzMDEzMF5BMl5BanBnXkFtZTgwMDI0MjE4MjE@._V1_.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Game of Thrones',
            'genre' => 'Fantasy',
            'description' => "In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all.",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY1200_CR126,0,630,1200_AL_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Witcher',
            'genre' => 'Fantasy',
            'description' => "It is based on the book series of the same name by Polish writer Andrzej Sapkowski. The Witcher follows the story of Geralt of Rivia who struggles to find his place in a world where people often prove more wicked than monsters and beasts.",
            'seasons' => '2 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Vampire Diaries',
            'genre' => 'Fantasy',
            'description' => "After centuries of quarreling, Stefan and Damon Salvatore return to their original town of Mystic Fall Virginia. Stefan, the selfless, brave, guilt ridden brothers meets a high school girl named Elena Gilbert who he instantly falls in love with.",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMDk3YzgxNDQtNTEzOS00NDMyLWFlYmYtYTZlMDk1NDkxNmMyXkEyXkFqcGdeQXVyNzA5NjUyNjM@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Once Upon a Time',
            'genre' => 'Fantasy',
            'description' => "For Emma Swan, life has been anything but a happy ending. But when she's reunited with Henry - the son she gave up for adoption ten years ago - on the night of her 28th birthday, everything changes. ",
            'seasons' => '7 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNjBmZmI0ZDktODI2MS00MDU1LTk0NDYtNGE0MDc0OWVkYzcwXkEyXkFqcGdeQXVyMzAzNTY3MDM@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Originals',
            'genre' => 'Fantasy',
            'description' => "A spin-off from The Vampire Diaries and set in New Orleans, The Originals centers on the Mikaelson siblings, otherwise known as the world's original vampires: Klaus (Joseph Morgan), Elijah (Daniel Gillies), and Rebekah (Claire Holt).",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNDllZjc2NjEtOGMwZS00ZmNkLTg2NDgtZjJkYjg0YjMxM2FmXkEyXkFqcGdeQXVyNzA5NjUyNjM@._V1_UY1200_CR85,0,630,1200_AL_.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Friends',
            'genre' => 'Comedy',
            'description' => "Ross Geller, Rachel Green, Monica Geller, Joey Tribbiani, and Phoebe Buffay are six 20 something year olds living in New York City. Over the course of 10 years and seasons, these friends go through family, love, drama, friendship, and comedy.",
            'seasons' => '10 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNDVkYjU0MzctMWRmZi00NTkxLTgwZWEtOWVhYjZlYjllYmU4XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Office',
            'genre' => 'Comedy',
            'description' => "A mediocre paper company in the hands of Scranton, PA branch manager Michael Scott. This mockumentary follows the everyday lives of the manager and the employees he 'manages.'",
            'seasons' => '9 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BMDNkOTE4NDQtMTNmYi00MWE0LWE4ZTktYTc0NzhhNWIzNzJiXkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => "Workin' Moms",
            'genre' => 'Comedy',
            'description' => "Workin' Moms follows the lives of four women as they juggle love, careers, and parenthood. They support, challenge, and try not to judge one another as life throws them curveballs.",
            'seasons' => '5 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BYTkyMmQxYTUtOWQwYy00Yzc1LTljODgtMDViNzVhN2E1Y2FkL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU2ODAxMjc@._V1_UY1200_CR105,0,630,1200_AL_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Brooklyn Nine-Nine',
            'genre' => 'Comedy',
            'description' => "Captain Ray Holt takes over Brooklyn's 99th precinct, which includes Detective Jake Peralta, a talented but carefree detective who's used to doing whatever he wants. The other employees of the 99th precinct...",
            'seasons' => '8 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNzVkYWY4NzYtMWFlZi00YzkwLThhZDItZjcxYTU4ZTMzMDZmXkEyXkFqcGdeQXVyODUxOTU0OTg@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'How I Met Your Mother',
            'genre' => 'Comedy',
            'description' => "Ted Mosby sits down with his kids, to tell them the story of how he met their mother. The story is told through memories of his friends Marshall, Lily, Robin, and Barney Stinson.",
            'seasons' => '9 seasons',
            'serieImageUrl' => 'https://m.media-amazon.com/images/M/MV5BNjg1MDQ5MjQ2N15BMl5BanBnXkFtZTYwNjI5NjA3._V1_.jpg',
        ]); 
    }
}
