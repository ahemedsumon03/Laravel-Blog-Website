<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'review_title'=>Str::random(15),
            'review_description'=>Str::random(25),
            'review_image'=>Str::random(15)
        ]);
    }
}
