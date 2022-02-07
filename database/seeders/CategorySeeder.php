<?php

namespace Database\Seeders;

use App\Models\CategoryTable;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryTable::insert(
            [
              [
                'CategoryID'=>1,
                'StoreID' => 1,
                'Category' => '中華' ,
              ],
              [
                'CategoryID'=>2,
                'StoreID' => 1 ,
                'Category' => 'デザート' ,
              ],
              [
                'CategoryID'=>3,
                'StoreID' => 1 ,
                'Category' => '寿司' ,
              ],
              [
                'CategoryID'=>4,
                'StoreID' => 2 ,
                'Category' => '麺' ,
              ],
              [
                'CategoryID'=>5,
                'StoreID' => 2 ,
                'Category' => 'そば' ,
              ],
              [
                'CategoryID'=>6,
                'StoreID' => 2 ,
                'Category' => '酒' ,
              ],
              [
                'CategoryID'=>7,
                'StoreID' => 3 ,
                'Category' => 'ジュース' ,
              ],
              [
                'CategoryID'=>8,
                'StoreID' => 3 ,
                'Category' => '丼もの' ,
              ],
              [
                'CategoryID'=>9,
                'StoreID' => 3 ,
                'Category' => 'うどん' ,
              ],
              [
                'CategoryID'=>10,
                'StoreID' => 3 ,
                'Category' => 'パスタ' ,
              ],
              [
                'CategoryID'=>11,
                'StoreID' => 3 ,
                'Category' => '鍋' ,
              ],
              [
                'CategoryID'=>12,
                'StoreID' => 3 ,
                'Category' => 'イタリアン' ,
              ],
              [
                'CategoryID'=>13,
                'StoreID' => 3,
                'Category' => 'ピザ' ,
              ],
            ],
        );
    }
}
