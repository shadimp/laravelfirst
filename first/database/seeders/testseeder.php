<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("tests")->insert([
            [
                "id" => 1,
                "name" => 'shadi',
                "abilities" => 'today',
                "age" => 36,
                "created_at"=>timestamp(),
                "updated_at"=>timestamp()
            ],
            [
                "id" => 2,
                "name" => 'reza',
                "abilities" => 'writting',
                "age" => 37
            ],
            [
                "id" => 4,
                "name" => 'nila',
                "abilities" => 'cute',
                "age" =>4
            ],
            [
                "id" => 3,
                "name" => 'Mehrsa',
                "abilities" => 'hair',
                "age" =>8
            ],
        ]);
    }
}
