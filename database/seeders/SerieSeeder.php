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
            'description' => "Sons of Anarchy, aka SAMCRO, is a motorcycle club that operates both illegal and legal businesses in the small town of Charming. They combine gun-running and a garage, plus involvement in porn film.",
            'seasons' => '7 seasons',
            'serieImageUrl' => '/img/sonsofanarchy.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Breaking Bad',
            'genre' => 'Thriller',
            'description' => "When chemistry teacher Walter White is diagnosed with Stage III cancer and given only two years to live, he decides he has nothing to lose. He lives with his teenage son, who has cerebral palsy, and his wife, in New Mexico.",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/breakingbad.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => "The Handmaid's Tale",
            'genre' => 'Thriller',
            'description' => "A religion-based autocracy has taken over most of the United States, renaming the country Gilead. In this country women are second-class citizens. Anyone trying to escape is punished. ",
            'seasons' => '4 seasons',
            'serieImageUrl' => '/img/handmaids.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Élite',
            'genre' => 'Thriller',
            'description' => "Las Encinas is the most exclusive school in the country- where the Elite sends their children to study. In there, three working-class teens have just been admitted after an earthquake destroyed their school.",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/elite.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Walking Dead',
            'genre' => 'Thriller',
            'description' => "Sheriff Deputy Rick Grimes gets shot and falls into a coma. When awoken he finds himself in a Zombie Apocalypse. Not knowing what to do he sets out to find his family, after he's done that, he gets connected to a group to become the leader.",
            'seasons' => '11 seasons',
            'serieImageUrl' => '/img/walkingdead.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Vikings',
            'genre' => 'Adventure',
            'description' => "The adventures of a Ragnar Lothbrok: the greatest hero of his age. The series tells the saga of Ragnar's band of Viking brothers and his family as he rises to become King of the Viking tribes.",
            'seasons' => '6 seasons',
            'serieImageUrl' => '/img/vikings.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Flash',
            'genre' => 'Adventure',
            'description' => "Barry Allen is a Central City police forensic scientist with a reasonably happy life, despite the childhood trauma of a mysterious red and yellow lightning killing his mother and framing his father.",
            'seasons' => '8 seasons',
            'serieImageUrl' => '/img/flash.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Shadow and Bone',
            'genre' => 'Adventure',
            'description' => "In a world where dark forces have taken over, a young mapmaker, Alina Starkov, accidentally discovers that she has the power to change the fate of the war. She is the only one who has the power to summon light.",
            'seasons' => '2 seasons',
            'serieImageUrl' => '/img/shadowandbone.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Lost',
            'genre' => 'Adventure',
            'description' => "The past, present, and future lives of surviving Oceanic Flight 815 passengers are dramatically intertwined as a fight for survival ensues in a quest for answers after crashlanding on a mysterious island.",
            'seasons' => '6 seasons',
            'serieImageUrl' => '/img/lost.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Sweet Tooth',
            'genre' => 'Adventure',
            'description' => "A boy who is half human and half deer survives in a post-apocalyptic world with other hybrids.",
            'seasons' => '1 seasons',
            'serieImageUrl' => '/img/sweettooth.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Hawaii Five-0',
            'genre' => 'Action',
            'description' => "Steve McGarrett comes to Hawaii to avenge his father's death, but when the Governor offers his own task force, he accepts. He picks up team members on the way, Danny Williams, the head detective on his father's case.",
            'seasons' => '10 seasons',
            'serieImageUrl' => '/img/hawaiifiveo.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'S.W.A.T.',
            'genre' => 'Action',
            'description' => "Inspired by the television series and the feature film, S.W.A.T. stars Shemar Moore as a former Marine and locally born and raised S.W.A.T. sergeant, tasked to run a specialized tactical unit that is the last stop in law enforcement in Los Angeles.",
            'seasons' => '4 seasons',
            'serieImageUrl' => '/img/swat.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Arrow',
            'genre' => 'Action',
            'description' => "Oliver Queen and his father are lost at sea when their luxury yacht sinks, apparently in a storm. His father dies, but Oliver survives for five years on an uncharted island and eventually returns home.",
            'seasons' => '8 seasons',
            'serieImageUrl' => '/img/arrow.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Last Kingdom',
            'genre' => 'Action',
            'description' => "The year is 872, and many of the separate kingdoms of what we now know as England have fallen to the invading Danes, leaving the great kingdom of Wessex standing alone and defiant under the command of King Alfred.",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/lastkingdom.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Action',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);

        DB::table('series')->insert([
            'serieName' => 'Prison Break',
            'genre' => 'Crime',
            'description' => "An innocent man is framed for the homicide of the Vice President's brother and scheduled to be executed at a super-max penitentiary, thus it's up to his younger brother to save him.",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/prisonbreak.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Blacklist',
            'genre' => 'Crime',
            'description' => "A highly articulate, erudite and intelligent businessman and mastermind, 'Red' Reddington, has allegedly been on the '10 Most Wanted List' of various U.S. law enforcement agencies for over 20 years.",
            'seasons' => '8 seasons',
            'serieImageUrl' => '/img/blacklist.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'La casa de papel',
            'genre' => 'Crime',
            'description' => "An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/lacasadepapel.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Crime',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Crime',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);

        DB::table('series')->insert([
            'serieName' => 'Game of Thrones',
            'genre' => 'Fantasy',
            'description' => "In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all.",
            'seasons' => '8 seasons',
            'serieImageUrl' => '/img/gameofthrones.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Witcher',
            'genre' => 'Fantasy',
            'description' => "It is based on the book series of the same name by Polish writer Andrzej Sapkowski. The Witcher follows the story of Geralt of Rivia who struggles to find his place in a world where people often prove more wicked than monsters and beasts.",
            'seasons' => '2 seasons',
            'serieImageUrl' => '/img/witcher.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Vampire Diaries',
            'genre' => 'Fantasy',
            'description' => "After centuries of quarreling, Stefan and Damon Salvatore return to their original town of Mystic Fall Virginia. Stefan, the selfless, brave, guilt ridden brothers meets a high school girl named Elena Gilbert who he instantly falls in love with.",
            'seasons' => '8 seasons',
            'serieImageUrl' => '/img/vampirediaries.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Once Upon a Time',
            'genre' => 'Fantasy',
            'description' => "For Emma Swan, life has been anything but a happy ending. But when she's reunited with Henry - the son she gave up for adoption ten years ago - on the night of her 28th birthday, everything changes. ",
            'seasons' => '7 seasons',
            'serieImageUrl' => '/img/onceuponatime.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Originals',
            'genre' => 'Fantasy',
            'description' => "A spin-off from The Vampire Diaries and set in New Orleans, The Originals centers on the Mikaelson siblings, otherwise known as the world's original vampires: Klaus (Joseph Morgan), Elijah (Daniel Gillies), and Rebekah (Claire Holt).",
            'seasons' => '5 seasons',
            'serieImageUrl' => '/img/originals.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Friends',
            'genre' => 'Comedy',
            'description' => "Ross Geller, Rachel Green, Monica Geller, Joey Tribbiani, and Phoebe Buffay are six 20 something year olds living in New York City. Over the course of 10 years and seasons, these friends go through family, love, drama, friendship, and comedy.",
            'seasons' => '10 seasons',
            'serieImageUrl' => '/img/friends.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'serieImageUrl' => '/img/.jpg',
        // ]);
        
    }
}
