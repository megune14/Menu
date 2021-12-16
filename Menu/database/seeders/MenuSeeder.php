<?php

namespace Database\Seeders;
use App\Models\CommodityTable;
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
        CommodityTable::insert(
            [
              [
                'CommodityID' => 1 ,
                'CommodityName'=>'ショコラ',
                'CommodityDetail' => 'test' ,
                'price' => 100 ,
                'StoreID' => 1 ,
                'CategoryID' => 2 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
              ],
              [
                'CommodityID' => 2 ,
                'CommodityName'=>'プリン',
                'CommodityDetail' => 'test' ,
                'price' => 100 ,
                'StoreID' => 1 ,
                'CategoryID' => 2 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
              ],
              [
                'CommodityID' => 3 ,
                'CommodityName'=>'らーめん',
                'CommodityDetail' => 'test' ,
                'price' => 100 ,
                'StoreID' => 2 ,
                'CategoryID' => 1 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
              ],
              [
                'CommodityID' => 4 ,
                'CommodityName'=>'餃子',
                'CommodityDetail' => 'test' ,
                'price' => 100 ,
                'StoreID' => 2 ,
                'CategoryID' => 10 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
              ],


            ]
        );
    }
}
