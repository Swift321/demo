<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'rev_title' => 'おろし弁当',
                'rev_coment' => 'おいしかった',
                'rev_pro_id' => '2',
                'rev_user_id' => '1',

            ],
            [
                'rev_title' => 'おろし弁当',
                'rev_coment' => 'うまい',
                'rev_pro_id' => '2',
                'rev_user_id' => '2',

            ],
            
        ]);
    }
}
