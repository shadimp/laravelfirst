<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("todo")->insert([
            // [
            //     "id" => 1,
            //     "name" => 'shadi',
            //     "abilities" => 'today',
            //     "age" => 36
            // ],
            // [
            //     "id" => 2,
            //     "name" => 'reza',
            //     "abilities" => 'writting',
            //     "age" => 37
            // ],
            [
                "id" => 4,
                "name" => 'nila',
                "abilities" => 'hair',
                "age" =>8
            ],
        ]);
    }
}
