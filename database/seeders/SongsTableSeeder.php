<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            DB::table('songs')->insert([
                'title' => 'Living on a prayer',
            ]);
        } {
            DB::table('songs')->insert([
                'title' => 'Nothing else matters',
            ]);
        } {
            DB::table('songs')->insert([
                'title' => 'Thunderstruck',
            ]);
        } {
            DB::table('songs')->insert([
                'title' => 'Back in black',
            ]);
        } {
            DB::table('songs')->insert([
                'title' => 'Ace of spades',
            ]);
        }
    }
}
