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
                'StoreID' => 1 ,
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
                'StoreID' => 1 ,
                'Category' => '麺' ,
              ],
              [
                'CategoryID'=>5,
                'StoreID' => 1 ,
                'Category' => 'そば' ,
              ],
            ],
        );
    }
}
