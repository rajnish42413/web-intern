<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standard;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stds = Standard::all();

        foreach ($stds as $std) {
        	Subject::create([
              'name' => "science",
              "full_name" => "WeIntern National Science Olympiad",
              "abbr" => "WNSO",
              'slug' =>   \Str::slug("science ".$std->id),    
              'class_id' =>  $std->id,    
        	]);

        	Subject::create([
    	      'name' => "mathematics",
            "full_name" => "WeIntern National Mathematics Olympiad",
              "abbr" => "WNMO",
    	      'slug' =>   \Str::slug("mathematics ".$std->id),    
    	      'class_id' =>  $std->id,    
        	]);

        	Subject::create([
              'name' => "english",
              "full_name" => "WeIntern National English Olympiad",
              "abbr" => "WNEO",
              'slug' =>   \Str::slug("english ".$std->id),    
              'class_id' =>  $std->id,    
        	]);

        	Subject::create([
              'name' => "general knowledge",
              "full_name" => "WeIntern National General Knowledge Olympiad",
              "abbr" => "WNGNO",
              'slug' =>   \Str::slug("general knowledge ".$std->id),    
              'class_id' =>  $std->id,    
        	]);
        }
    }
}
