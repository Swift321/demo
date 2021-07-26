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
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => '123password',

            ],
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => '1234password',

            ],
        ]);
    }
}
