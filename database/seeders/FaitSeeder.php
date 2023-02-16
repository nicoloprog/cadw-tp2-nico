<?php

namespace Database\Seeders;

use App\Models\Fait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fait::factory(20)->create();

        $json = file_get_contents(public_path() . "/donnees/cat-facts.json");
        $faitsChat = json_decode($json, true);

        $faits = $faitsChat['data'];

        foreach($faits as $fait) {
            // dd($fait);
            DB::table('faits')->insert([
                "fact" => $fait['fact'],
                "length" => $fait['length'],
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }

        // DB::table('auteurs')->insert([
        //     "prenom" => "Eric",
        //     "nom" => "Gagné",
        //     "created_at" => now(),
        //     "updated_at" => now()
        // ]);
    }
}
