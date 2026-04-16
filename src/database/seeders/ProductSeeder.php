<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            'name' => '腕時計',
            'price' => 15000,
            'brand' => 'Rolax',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'condition' => '良好',
            'img' => 'watch.jpg'
        ],
        
        [
            'name' => 'HDD',
            'price' => 5000,
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'condition' => '目立った傷や汚れなし',
            'img' => 'HDD.jpg'
        ],

        [
            'name' => '玉ねぎ3束',
            'price' => 300,
            'brand' => '',
            'description' => '新鮮な玉ねぎ3束のセット',
            'condition' => 'やや傷や汚れあり',
            'img' => 'onion.jpg'
        ],

        [
            'name' => '革靴',
            'price' => 4000,
            'brand' => '',
            'description' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い',
            'img' => 'shoes.jpg'
        ],

        [
            'name' => 'ノートPC',
            'price' => 45000,
            'brand' => '',
            'description' => '高性能なノートパソコン',
            'condition' => '良好',
            'img' => 'notePC.jpg'
        ],

        [
            'name' => 'マイク',
            'price' => 8000,
            'brand' => '',
            'description' => '高品質のレコーディング用マイク',
            'condition' => '目立った傷や汚れなし',
            'img' => 'mike.jpg'
        ],

        [
            'name' => 'ショルダーバッグ',
            'price' => 3500,
            'brand' => '',
            'description' => 'おしゃれなショルダーバッグ',
            'condition' => 'やや傷や汚れあり',
            'img' => 'bag.jpg'
        ],

        [
            'name' => 'タンブラー',
            'price' => 500,
            'brand' => '',
            'description' => '使いやすいタンブラー',
            'condition' => '状態が悪い',
            'img' => 'Tumbler.jpg'
        ],

        [
            'name' => 'コーヒーミル',
            'price' => 4000,
            'brand' => 'Starbacks',
            'description' => '手動のコーヒーミル',
            'condition' => '良好',
            'img' => 'coffee.jpg'
        ],

        [
            'name' => 'メイクセット',
            'price' => 2500,
            'brand' => '',
            'description' => '便利なメイクアップセット',
            'condition' => '目立った傷や汚れなし',
            'img' => 'make.jpg'
        ],
    ]);
    }
}
