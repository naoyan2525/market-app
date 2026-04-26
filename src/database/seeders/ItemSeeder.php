<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'name' => '腕時計',
                'price' => 15000,
                'brand' => 'Rolax',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_watch.jpg',
                'condition' => '良好',
                'user_id' => 1,
            ],
            [
                'name' => 'HDD',
                'price' => 5000,
                'brand' => '西芝',
                'description' => '高速で信頼性の高いハードディスク',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_hdd.jpg',
                'condition' => '目立った傷や汚れなし',
                'user_id' => 2,
            ],
            [
                'name' => '玉ねぎ3束',
                'price' => 300,
                'brand' => null,
                'description' => '新鮮な玉ねぎ3束のセット',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_onion.jpg',
                'condition' => 'やや傷や汚れあり',
                'user_id' => 2,
            ],
            [
                'name' => '革靴',
                'price' => 4000,
                'brand' => null,
                'description' => 'クラシックなデザインの革靴',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_shoes.jpg',
                'condition' => '状態が悪い',
                'user_id' => 1,
            ],
            [
                'name' => 'ノートPC',
                'price' => 45000,
                'brand' => null,
                'description' => '高性能なノートパソコン',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_laptop.jpg',
                'condition' => '良好',
                'user_id' => 3,
            ],
            [
                'name' => 'マイク',
                'price' => 8000,
                'brand' => null,
                'description' => '高音質のレコーディング用マイク',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_mic.jpg',
                'condition' => '目立った傷や汚れなし',
                'user_id' => 3,
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => 3500,
                'brand' => null,
                'description' => 'おしゃれなショルダーバッグ',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_bag.jpg',
                'condition' => 'やや傷や汚れあり',
                'user_id' => 2,
            ],
            [
                'name' => 'タンブラー',
                'price' => 500,
                'brand' => null,
                'description' => '使いやすいタンブラー',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_tumbler.jpg',
                'condition' => '状態が悪い',
                'user_id' => 3,
            ],
            [
                'name' => 'コーヒーミル',
                'price' => 4000,
                'brand' => 'Starbacks',
                'description' => '手動のコーヒーミル',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_coffee.jpg',
                'condition' => '良好',
                'user_id' => 1,
            ],
            [
                'name' => 'メイクセット',
                'price' => 2500,
                'brand' => null,
                'description' => '便利なメイクアップセット',
                'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/item_make.jpg',
                'condition' => '目立った傷や汚れなし',
                'user_id' => 2,
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}