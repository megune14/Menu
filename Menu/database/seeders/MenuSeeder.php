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
              ],
              [
                'name'=>'ラーメン',
                'price' => 200 ,
              ],
              [
                'name'=>'デザート',
                'price' => 300 ,
              ],
              [
                'name'=>'中華',
                'price' => 400 ,
              ],
            ]
        );
    }
}
