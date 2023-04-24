<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Tom', 'Bill', 'Anna', 'Stacy', 'Greg', 'Jim', 'Ashley', 'Bubu'];

        for ($i=0; $i < 8; $i++)
        {
            DB::table('users')->insert([
                'name' => $names[$i] . '@' . $names[$i] . '.' . 'pl',
                'email' => $names[$i] . '@' . $names[$i] . '.' . 'pl',
                'password' => Hash::make($names[$i] . '@' . $names[$i] . '.' . 'pl'),
            ]);
        }   

        $teamNames = [
            "Thunderbolts",
            "Raging Rhinos",
            "Golden Eagles",
            "Wild Mustangs",
            "Tropical Storms",
            "Lightning Strikes",
            "Black Cobras",
            "Red Devils",
            "Blue Whales",
            "Crimson Crushers",
            "Green Geckos",
            "Polar Bears",
            "Yellow Jackets",
            "Gray Wolves",
            "Purple Panthers",
            "White Sharks",
            "Emerald Dragons",
            "Sapphire Seals",
            "Diamond Dolphins",
            "Ruby Raptors",
            "Onyx Owls",
            "Topaz Tigers",
            "Amber Antelopes",
            "Obsidian Otters",
            "Turquoise Turtles",
            "Aquamarine Armadillos",
            "Carnelian Crocodiles",
            "Lapis Lazuli Lions",
            "Peridot Penguins",
            "Garnet Gorillas",
            "Opal Ostriches",
            "Moonstone Musketeers",
            "Jade Jaguars",
            "Agate Alligators",
            "Aventurine Apes",
            "Chalcedony Cheetahs",
            "Hematite Hawks",
            "Jasper Jaguars",
            "Malachite Moose",
            "Nephrite Narwhals",
            "Rose Quartz Rhinoceroses",
            "Wild Sharks",
            "Colorfull Ants",
        ];  
        
        for ($i=1; $i < 21; $i++)
        {
            DB::table('games')->insert([
                'api_id' => 'ca811fe'.$i.'5b6f81'.$i.'e1aa7aa12'.$i.'455281ca8d',
                'start_time' => Carbon::now()->subYear(),
                'name_home' => $teamNames[$i],
                'name_away' => $teamNames[$i+1],
                'league' => 'english',
                'over_price' => floatval(rand(100, 400) / 100),
                'over_point' => floatval(rand(100, 400) / 100),
                'under_price' => floatval(rand(100, 400) / 100),
                'under_point' => floatval(rand(100, 400) / 100),
                'score_home' => rand(0,5),
                'score_away' => rand(0,5),
                'ended' => true,
            ]);
        }

        for ($i=21; $i < 41; $i++)
        {
            DB::table('games')->insert([
                'api_id' => 'ca811fe'.$i.'5b6f81'.$i.'e1aa7aa12'.$i.'455281ca8d',
                'start_time' => Carbon::now()->addYear(),
                'name_home' => $teamNames[$i],
                'name_away' => $teamNames[$i+1],
                'league' => 'english',
                'over_price' => floatval(rand(100, 400) / 100),
                'over_point' => floatval(rand(100, 400) / 100),
                'under_price' => floatval(rand(100, 400) / 100),
                'under_point' => floatval(rand(100, 400) / 100),
                'ended' => false,
            ]);
        }

        for ($i=2; $i < 9; $i++)
        {
            DB::table('tickets')->insert([
                'user_id' => $i,
                'confirm' => true,
                'max_bet' => rand(50, 400),
            ]);
        }

        for ($i=1; $i < 8; $i++)
        {
            DB::table('game_ticket')->insert([
                'game_id' => $i+20,
                'ticket_id' => $i,
                'your_odd' => floatval(rand(100, 400) / 100),
                'your_type' => rand(1, 2),
            ]);
        }

        for ($i=1; $i < 8; $i++)
        {
            DB::table('game_ticket')->insert([
                'game_id' => $i+28,
                'ticket_id' => $i,
                'your_odd' => floatval(rand(100, 400) / 100),
                'your_type' => rand(1, 2),
            ]);
        }
        
    }
}
