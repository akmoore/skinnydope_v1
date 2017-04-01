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
            'email' => 'jbrown@email.com',
            'password' => bcrypt('secret'),
            'cell_phone' => '12253889871'
        ]);
    }
}
