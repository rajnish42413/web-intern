<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standard;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=2; $i < 13 ; $i++) { 
          Standard::create([
              'name' => "class ".$i,
              'slug' =>   \Str::slug("class ".$i)       
          ]);
        }
    }
}
