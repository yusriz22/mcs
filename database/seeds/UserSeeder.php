<?php

use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'mykad' => '909090909090',
            'password' => bcrypt('ahmad') // Hash::make('ahmad');
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'mykad' => '809090909090',
            'password' => bcrypt('ali')
        ]);
    }
}
