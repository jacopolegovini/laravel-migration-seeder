<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Checker;

class CheckerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Checker::truncate();
        $heading = true;
        $input_file = fopen(base_path("database\checkers.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE) {
            if (!$heading) {
                $Checker = array(
                    "first_name" => $record['0'],
                    "last_name" => $record['1'],
                    "code" => $record['2'],
                );
                Checker::create($Checker);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
