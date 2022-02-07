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
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 1 ,
                'CategoryID' => 1 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,
              ],
              [
                'CommodityID' => 2 ,
                'CommodityName'=>'プリン',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 1 ,
                'CategoryID' => 2 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 3 ,
                'CommodityName'=>'らーめん',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 1 ,
                'CategoryID' => 3 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],

              [
                'CommodityID' => 5 ,
                'CommodityName'=>'マグロ',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' =>  2,
                'CategoryID' => 4 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 6 ,
                'CommodityName'=>'麺',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 2 ,
                'CategoryID' => 5 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 7 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 7 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 8 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 8 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 9 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 9 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 10 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 10 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 11 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 11 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 12 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 12 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],
              [
                'CommodityID' => 13 ,
                'CommodityName'=>'そば',
                'CommodityDetail' => 'おいしい' ,
                'price' => 100 ,
                'StoreID' => 3 ,
                'CategoryID' => 13 ,
                'Allergy' => 'いか' ,
                'Calory' => 1 ,
                'StopFlag' => 0 ,
                'img' => null ,

              ],



            ]
        );
    }
}
