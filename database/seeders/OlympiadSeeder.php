<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Olympiad;



class OlympiadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Olympiad::create([
              'name' => "science",
              "full_name" => "WeIntern National Science Olympiad",
              "abbr" => "WNSO",
              'slug' =>   \Str::slug("WeIntern National Science Olympiad"),    
              'exam_at' =>  "06-06-2021",    
            ]);

            Olympiad::create([
              'name' => "mathematics",
              "full_name" => "WeIntern National Mathematics Olympiad",
              "abbr" => "WNMO",
              'slug' =>   \Str::slug("WeIntern National Mathematics Olympiad"),    
              'exam_at' =>   "02-06-2021",    
            ]);

            Olympiad::create([
              'name' => "english",
              "full_name" => "WeIntern National English Olympiad",
              "abbr" => "WNEO",
              'slug' =>   \Str::slug("WeIntern National English Olympiad"),    
              'exam_at' =>   "04-06-2021",    
            ]);

            Olympiad::create([
              'name' => "general knowledge",
              "full_name" => "WeIntern National General Knowledge Olympiad",
              "abbr" => "WNGNO",
              'slug' =>   \Str::slug("WeIntern National General Knowledge Olympiad"),    
              'exam_at' =>   "08-06-2021",    
            ]);
    }

}
