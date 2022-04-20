<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Martin',
            'email'    => 'mrobledosoler@gmail.com',
            'password' => Hash::make('12345678'),
            'tipo'     => '2',

        ]);
    }
}
