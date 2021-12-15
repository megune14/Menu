<?php

namespace Database\Seeders;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert(
            [
              [
                'name'=>'おかし',
                'price' => 100 ,
                'StoreID' => 1 ,
                'CommodityID' => 1 ,
                'CommodityDetailID' => 1 ,
                'Category' => 1 ,
                'StopFlag' => 0 ,
              ],
              [
                'name'=>'デザート',
                'price' => 100 ,
                'StoreID' => 1 ,
                'CommodityID' => 2 ,
                'CommodityDetailID' => 2 ,
                'Category' => 1 ,
                'StopFlag' => 0 ,
              ],
              [
                'name'=>'ラーメン',
                'price' => 100 ,
                'StoreID' => 2 ,
                'CommodityID' => 3 ,
                'CommodityDetailID' => 3 ,
                'Category' => 2 ,
                'StopFlag' => 0 ,
              ],
              [
                'name'=>'中華',
                'price' => 100 ,
                'StoreID' => 2 ,
                'CommodityID' => 4 ,
                'CommodityDetailID' => 4 ,
                'Category' => 2 ,
                'StopFlag' => 0 ,
              ],

            ]
        );
    }
}
