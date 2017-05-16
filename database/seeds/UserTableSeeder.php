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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Jake',
                'email' => 'jake@philosophy.app',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Sarah',
                'email' => 'sarah@philosophy.app',
                'password' => bcrypt('secret')
            ],
        ]);
    }
}
