<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'description' => "Sons of Anarchy, aka SAMCRO, is a motorcycle club that operates both illegal and legal businesses in the small town of Charming. They combine gun-running and a garage, plus involvement in porn film. Clay, the president, likes it old school and violent; while Jax, his stepson and the club's VP, has thoughts about changing the way things are, based on his dead father's journal. Their conflict has effects on both the club and their personal relationships.",
            'seasons' => '7 seasons',
            'movieImageUrl' => '/img/sonsofanarchy.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Breaking Bad',
            'genre' => 'Thriller',
            'description' => "When chemistry teacher Walter White is diagnosed with Stage III cancer and given only two years to live, he decides he has nothing to lose. He lives with his teenage son, who has cerebral palsy, and his wife, in New Mexico. Determined to ensure that his family will have a secure future, Walt embarks on a career of drugs and crime. He proves to be remarkably proficient in this new world as he begins manufacturing and selling methamphetamine with one of his former students.",
            'seasons' => '5 seasons',
            'movieImageUrl' => '/img/breakingbad.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => "The Handmaid's Tale",
            'genre' => 'Thriller',
            'description' => "A religion-based autocracy has taken over most of the United States, renaming the country Gilead. In this country women are second-class citizens. Anyone trying to escape is punished. One such person is June, who is captured while trying to escape with her husband and child and is sentenced to be a handmaid, bearing children for childless government officials. As a handmaid, June is renamed Offred. This is her story.",
            'seasons' => '4 seasons',
            'movieImageUrl' => '/img/handmaids.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Élite',
            'genre' => 'Thriller',
            'description' => "Las Encinas is the most exclusive school in the country- where the Elite sends their children to study. In there, three working-class teens have just been admitted after an earthquake destroyed their school. The clash between those who have everything and those who have nothing to lose creates a perfect storm that ends in a murder. Who committed the crime?",
            'seasons' => '5 seasons',
            'movieImageUrl' => '/img/elite.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Walking Dead',
            'genre' => 'Thriller',
            'description' => "Sheriff Deputy Rick Grimes gets shot and falls into a coma. When awoken he finds himself in a Zombie Apocalypse. Not knowing what to do he sets out to find his family, after he's done that, he gets connected to a group to become the leader. He takes charge and tries to help this group of people survive, find a place to live and get them food. This show is all about survival, the risks and the things you'll have to do to survive.",
            'seasons' => '11 seasons',
            'movieImageUrl' => '/img/walkingdead.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Vikings',
            'genre' => 'Adventure',
            'description' => "The adventures of a Ragnar Lothbrok: the greatest hero of his age. The series tells the saga of Ragnar's band of Viking brothers and his family as he rises to become King of the Viking tribes. As well as being a fearless warrior, Ragnar embodies the Norse traditions of devotion to the gods: legend has it that he was a direct descendant of Odin, the god of war and warriors.",
            'seasons' => '6 seasons',
            'movieImageUrl' => '/img/vikings.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Adventure',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Adventure',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Adventure',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Adventure',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);

        DB::table('series')->insert([
            'serieName' => 'Hawaii Five-0',
            'genre' => 'Action',
            'description' => "Steve McGarrett (Alex O'Loughlin) comes to Hawaii to avenge his father's death, but when the Governor offers his own task force, he accepts. He picks up team members on the way, Danny Williams (Scott Caan), the head detective on his father's case, Chin Ho Kelly (Daniel Dae Kim), a former Honolulu Police Department Detective who was fired for accused corruption, and McGarrett's father's old patrol partner, Kono Kalakaua (Grace Park), a Cadet at the Police Academy who's one week from graduating, Lori Weston (Lauren German), entry to Five-O temporarily, Catharine Rollins (Michelle Borth), a girlfriend of Steve, and Captain Lou Grover (Chi McBride), a former Chicago Police Department Head of S.W.A.T.",
            'seasons' => '10 seasons',
            'movieImageUrl' => '/img/hawaiifiveo.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'S.W.A.T.',
            'genre' => 'Action',
            'description' => "Inspired by the television series and the feature film, S.W.A.T. stars Shemar Moore as a former Marine and locally born and raised S.W.A.T. sergeant, tasked to run a specialized tactical unit that is the last stop in law enforcement in Los Angeles. Torn between loyalty to where he was raised and allegiance to his brothers in blue, Daniel 'Hondo' Harrelson strives to bridge the divide between his two worlds and acclimate to his new duties as the legal guardian of a teenager.",
            'seasons' => '4 seasons',
            'movieImageUrl' => '/img/swat.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Action',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Action',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Action',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);

        DB::table('series')->insert([
            'serieName' => 'Prison Break',
            'genre' => 'Crime',
            'description' => "An innocent man is framed for the homicide of the Vice President's brother and scheduled to be executed at a super-max penitentiary, thus it's up to his younger brother to save him with his genius scheme: install himself in the same prison by holding up a bank and, as the final month ticks away, launch the escape plan step-by-step to break the both of them out, with his full-body tattoo acting as his guide; a tattoo which hides the layout of the prison facility and necessary clues vital to the escape.",
            'seasons' => '5 seasons',
            'movieImageUrl' => '/img/prisonbreak.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Blacklist',
            'genre' => 'Crime',
            'description' => "A highly articulate, erudite and intelligent businessman and mastermind, 'Red' Reddington, has allegedly been on the '10 Most Wanted List' of various U.S. law enforcement agencies for over 20 years. The legend is that Red is as elusive as he is clever, controlling a labyrinth of creative enterprises, coupled with uncanny ability to gather and finesse information at the drop of a hat. On the first day at FBI for a new female profiler fresh out of Quantico, Red offers to bandy wits with the FBI. Red promises to deliver various criminals and plots previously unknown to any branch of law enforcement... and all Red requests in return is to choose his muse.",
            'seasons' => '8 seasons',
            'movieImageUrl' => '/img/blacklist.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'La casa de papel',
            'genre' => 'Crime',
            'description' => "An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.",
            'seasons' => '5 seasons',
            'movieImageUrl' => '/img/lacasadepapel.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Crime',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Crime',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);

        DB::table('series')->insert([
            'serieName' => 'Game of Thrones',
            'genre' => 'Fantasy',
            'description' => "In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all. Meanwhile, the last heirs of a recently usurped dynasty plot to take back their homeland from across the Narrow Sea.",
            'seasons' => '8 seasons',
            'movieImageUrl' => '/img/gameofthrones.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Witcher',
            'genre' => 'Fantasy',
            'description' => "It is based on the book series of the same name by Polish writer Andrzej Sapkowski. The Witcher follows the story of Geralt of Rivia, a solitary monster hunter, who struggles to find his place in a world where people often prove more wicked than monsters and beasts. But when destiny hurtles him toward a powerful sorceress, and a young princess with a special gift, the three must learn to navigate independently the increasingly volatile Continent.",
            'seasons' => '2 seasons',
            'movieImageUrl' => '/img/witcher.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Vampire Diaries',
            'genre' => 'Fantasy',
            'description' => "After centuries of quarreling, Stefan and Damon Salvatore return to their original town of Mystic Fall Virginia. Stefan, the selfless, brave, guilt ridden brothers meets a high school girl named Elena Gilbert who he instantly falls in love with. While Damon the gorgeous, dangerous, and selfish vampire is after his brothers girl to pay him back for making him turn into a vampire in 1864.",
            'seasons' => '8 seasons',
            'movieImageUrl' => '/img/vampirediaries.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'Once Upon a Time',
            'genre' => 'Fantasy',
            'description' => "For Emma Swan, life has been anything but a happy ending. But when she's reunited with Henry - the son she gave up for adoption ten years ago - on the night of her 28th birthday, everything changes. The now 10-year-old Henry is in desperate need of Emma's help because he believes from reading a book of fairy-tales that she's the daughter of Snow White and Prince Charming - who sent her away from the Enchanted Forest to be protected from a curse that was enacted by the Evil Queen.",
            'seasons' => '7 seasons',
            'movieImageUrl' => '/img/onceuponatime.jpg',
        ]);
        DB::table('series')->insert([
            'serieName' => 'The Originals',
            'genre' => 'Fantasy',
            'description' => "A spin-off from The Vampire Diaries and set in New Orleans, The Originals centers on the Mikaelson siblings, otherwise known as the world's original vampires: Klaus (Joseph Morgan), Elijah (Daniel Gillies), and Rebekah (Claire Holt). Now Klaus must take down his protégé, Marcel (Charles Michael Davis), who is now in charge of New Orleans, in order to re-take his city, as he originally built New Orleans.",
            'seasons' => '5 seasons',
            'movieImageUrl' => '/img/originals.jpg',
        ]);

        DB::table('series')->insert([
            'serieName' => 'Friends',
            'genre' => 'Comedy',
            'description' => "Ross Geller, Rachel Green, Monica Geller, Joey Tribbiani, Chandler Bing, and Phoebe Buffay are six 20 something year olds living in New York City. Over the course of 10 years and seasons, these friends go through family, love, drama, friendship, and comedy.",
            'seasons' => '10 seasons',
            'movieImageUrl' => '/img/friends.jpg',
        ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        // DB::table('series')->insert([
        //     'serieName' => '',
        //     'genre' => 'Comedy',
        //     'description' => "",
        //     'seasons' => ' seasons',
        //     'movieImageUrl' => '/img/.jpg',
        // ]);
        
    }
}
