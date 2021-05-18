<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Olympiad;
use App\Models\Package;
use Carbon\Carbon;



class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $expire_at = "2021-08-06 23:59:59";
      $start_at  = Carbon::now();

      $all = Olympiad::all();
      foreach ($all as $o) {
        Package::create([
           "name" => "Olympiad",
           "product" => $o->id,
           "description" => $o->full_name,
           "amount" => 250,
           "type"  => Package::OLYMPIAD,
           "expire_at"  => $expire_at,
           "start_at"  => $start_at,
           "status"  => 1
        ]);

        Package::create([
           "name" => "Olympiad + Mock Test",
           "product" => $o->id,
           "description" => $o->full_name,
           "amount" => 400,
           "type"  => Package::OLYMPIAD_PLUS_MOCKTEST,
           "expire_at"  => $expire_at,
           "start_at"  => $start_at,
           "status"  => 1
        ]);

         Package::create([
         "name" => "Mock Test",
         "product" => $o->id,
         "description" => "Only Mock Test",
         "amount" => 100,
         "type"  => Package::ONLY_MOCKTEST,
         "expire_at"  => $expire_at,
         "start_at"  => $start_at,
         "status"  => 1
        ]);

      }

      Package::create([
         "name" => "Combined 4 Olympiads",
         "product" => 0,
         "description" => "Combined 4 Olympiads",
         "amount" => 800,
         "type"  => "Combined 4 Olympiads",
         "expire_at"  => $expire_at,
         "start_at"  => $start_at,
         "status"  => 1,
         "type"  => Package::ALL_OLYMPIAD,
      ]);


      Package::create([
         "name" => "4 Olympiads + 4 Mock Tests",
         "product" => 0,
         "description" => "4 Olympiads + 4 Mock Tests",
         "amount" => 1400,
         "type"  => Package::ALL_OLYMPIAD_PLUS_MOCKTEST,
         "expire_at"  => $expire_at,
         "start_at"  => $start_at,
         "status"  => 1
      ]);

    }

}
