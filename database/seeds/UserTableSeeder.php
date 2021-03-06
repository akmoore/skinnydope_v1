<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Jonathan',
            'last_name' => 'Brown',
            'slug' => 'jonathan-brown',
            'email' => 'skinnydope1@yahoo.com',
            'password' => bcrypt('secret'),
            'cell_phone' => '12253889871'
        ]);

        DB::table('users')->insert([
            'first_name' => 'Alfred',
            'last_name' => 'Moore',
            'slug' => 'alfred-moore',
            'email' => 'ak_moore@live.com',
            'password' => bcrypt('password'),
            'cell_phone' => '12253889871'
        ]);
    }
}
