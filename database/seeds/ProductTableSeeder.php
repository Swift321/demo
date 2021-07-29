<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'id' => '1',
                'pro_name' => 'タコライス弁当',
                'pro_coment' => '辛くないカレー風味のタコライスです。子どもでも食べやすい味でおすすめです',
            ],
            [
                'id' => '2',
                'pro_name' => 'おろし弁当',
                'pro_coment' => 'キン竜田をさっぱりとした果汁ポン酢食べれます',
            ],
            [
                'id' => '3',
                'pro_name' => '豚しゃぶ弁当',
                'pro_coment' => '豚肉はたっぷりの野菜の水分で蒸し焼きにし、しっとり柔らかになっておりとてもおいしいです。',
            ],
            [
                'id' => '4',
                'pro_name' => 'チキン南蛮弁当',
                'pro_coment' => '鶏の胸肉に衣をつけて揚げたチキン南蛮は、外はカリッと中はふんわり。タルタルソースとのハーモニーをお楽しみください。',
            ],
            [
                'id' => '5',
                'pro_name' => 'ハンバーグ弁当',
                'pro_coment' => 'お子様から大人までみんなに人気のハンバーグです。デミグラスソースの旨味と具材感たっぷりのハンバーグでご飯が進みます',
            ],
            [
                'id' => '6',
                'pro_name' => '唐揚げ弁当',
                'pro_coment' => '冷めても衣はカリッとしていて、お肉は柔らかいままジューシーです',
            ],
            [
                'id' => '7',
                'pro_name' => 'サラダ',
                'pro_coment' => '絶妙のブレンドでサラダにもぴったりのマヨしょうゆ付　お弁当に、食卓にプラス一品。',

            ],
            [
                'id' => '8',
                'pro_name' => 'フライドチキン',
                'pro_coment' => '国内産鶏の旨みを味わえるフライドチキンです',
            ],
            [
                'id' => '9',
                'pro_name' => 'フライドポテト',
                'pro_coment' => '手軽においしく、小さな子も大人も大喜びのフライドポテトです',
            ],


        ]);
    }
}
