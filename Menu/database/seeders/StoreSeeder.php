<?php

namespace Database\Seeders;
use App\Models\StoreTable;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreTable::insert(
            [
              [
                'StoreID'=>1,
                'StoreName' => 'かいねい1' ,
                'Email' => 'megune12@mail.com' ,
                'Tell' => '09078397822' ,
                'Password' => 'o-haramito' ,
              ],
              [
                'StoreID'=>2,
                'StoreName' => 'かいねい2' ,
                'Email' => 'megune12@mail.com' ,
                'Tell' => '09078397822' ,
                'Password' => 'o-haramito' ,
              ],
              [
                'StoreID'=>3,
                'StoreName' => 'かいねい3' ,
                'Email' => 'megune12@mail.com' ,
                'Tell' => '09078397822' ,
                'Password' => 'o-haramito' ,
              ],
              [
                'StoreID'=>4,
                'StoreName' => 'かいねい4' ,
                'Email' => 'megune12@mail.com' ,
                'Tell' => '09078397822' ,
                'Password' => 'o-haramito' ,
              ],
            ],
            );
    }
}
